<?php

defined('SYSPATH') or die('No direct script access.');

require_once(DOCROOT.'/smsc_api.php');

function testPhone()
{
	if(!isset($_POST['phone']))
		throw new Exception("Не указан телефон.", 1);
	$phone = $_POST['phone'];
	if(!$phone)
		throw new Exception("Не указан телефон.", 1);
	if(!preg_match('/^\d{11}$/',$phone))
		throw new Exception("Телефон в неправильном формате.", 2);
	return $phone;
}

function testPollId()
{
	$poll_id = (isset($_POST['poll_id']) and is_numeric($_POST['poll_id']))?intval($_POST['poll_id']):null;
	if(!$poll_id)
		throw new Exception("Не указан id голосования.", 3);
	return $poll_id;
}

function getPoll($poll_id)
{
	$poll = new Model_Poll($poll_id);
	if(!$poll->loaded())
		throw new Exception("Нет такого голосования.", 4);
	return $poll;
}

function getRange($phone)
{
	$phone_code = intval(substr($phone, -10, 3));
	$phone_number = intval(substr($phone, -7));
	$range = new Model_Range();
	$range->where('code','=', $phone_code)
		->where('range_start', '<=',$phone_number)
		->where('range_end', '>=', $phone_number)
		->find();
	// range not exists
	if(!$range->loaded())
		throw new Exception("Нет такого кода сети.", 11);
	return $range;
}

function generateCode()
{
	$chars = str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789');
	$code = '';
	for($i=0; $i < 8; $i++)
		$code .= $chars{mt_rand(0,61)};
	return $code;
}

function testCode()
{
	if(!isset($_POST['code']))
		throw new Exception("Не указан код подтверждения.", 8);
	$code = $_POST['code'];
	if(!$code)
		throw new Exception("Не указан код подтверждения.", 8);
	if(!preg_match('/^[a-zA-Z\d]{8}$/',$code))
		throw new Exception("Неверный формат кода подтверждения.", 9);
	return $code;
}

function getCode($phone_id, $poll_id, $pin_code, $session_hash)
{
	$code = new Model_Code();
	$code ->where('phone_id', '<=',$phone_id)
		->where('poll_id', '>=', $poll_id)
		//->where('used_time','=', null)
		//->where('used','=', 0)
		->where('code','=', $pin_code)
		->where('session_hash','=', $session_hash)
		->find();
	if(!$code->loaded())
		throw new Exception("Нет такого кода - или это не ваш код", 10);
	return $code;
}

function testAnswers()
{
	if(!isset($_POST['answers']))
		throw new Exception("За что голосуем-то?", 11);
	$answers = $_POST['answers'];
	if(!$answers)
		throw new Exception("За что голосуем-то?", 11);
	if(!preg_match('/^\d+(,\d+)*$/',$answers))
		throw new Exception("Неверный формат голоса.", 12);
	return array_map('intval', explode(',',$answers));
}
function sendSms($phone, $message)
{
	$a = send_sms($phone, $message);
	if(sizeof($a) > 2)
		return true;
	else
		throw new Exception("Не удалось отправить sms: {$a[1]}");
}

class Controller_Ajax extends Controller
{
	protected function get_pin_code()
	{
		$session = Session::instance();
		
		$raw_phone = testPhone();
		$poll_id = testPollId();
		$poll = getPoll($poll_id);
		$md5_phone = md5($raw_phone);
		$phone = new Model_Phone();
		$phone->where('md5_phone','=',$md5_phone)->find();
		if(!$phone->loaded())
		{
			$range = getRange($raw_phone);
			// check region
			//if($poll->region_id != $range->region_id)
			if(!($poll->regions->where('id','=',$range->region_id)->count_all()))
				throw new Exception("Ваш номер телефона не относится к региону, в котором проводится это голосование.", 6);
			// create phone record
			$phone->range_id = $range->id;
			$phone->md5_phone = $md5_phone;
			$phone->save();
		}
		else
		{
			$range = $phone->range;
			// check region
			//if($poll->region_id != $range->region_id)
			if(!($poll->regions->where('id','=',$range->region_id)->count_all()))
				throw new Exception("Ваш номер телефона не относится к региону, в котром проводится это голосование.", 6);
		}
		// поиск ранее сгенерированных неактивированных кодов. нашли - до свиания
		$session_hash = md5($session->id().$poll->id);
		if($phone->codes->where('session_hash', '=', $session_hash)->where('used', '=', 0)->where('used_time','=',null)->count_all())
			throw new Exception("Мы уже отправили вам код, что же вы его не вводите?", 7);
		// generate pin
		$pin_code = generateCode();

		//if(sendSms($raw_phone, "Код подтверждения: $pin_code"))
		{
			// new code
			$code = new Model_Code();
			$code->poll_id = $poll_id;
			$code->phone_id = $phone->id;
			$code->code = $pin_code;
			$code->session_hash = $session_hash;
			$code->save();
			
			$session->set($session_hash,$pin_code);
			
			return array(
				'message' => 'Код подтверждения отправлен.',
				'pincode' => $pin_code,
				//'session_hash' => $session_hash,
				);
		}
		//else
		//	throw new Exception("Не удалось отправить код подтверждения.");
	}

	protected function vote()
	{
		$session = Session::instance();
		
		$answers_ids = testAnswers();
		$phone = testPhone();
		$poll_id = testPollId();
		$pin_code = testCode();
		$poll = getPoll($poll_id);
		$session_hash = md5($session->id().$poll->id);
		//echo $session_hash;
		if(!$session->get($session_hash,false))
			throw new Exception("Кажется, мы не отправляли вам код. Или отправляли, но не вам... Вы часом не злобный хакер?", 13);
		if($session->get($session_hash,0) != $pin_code)
			throw new Exception("Алярм, алярм, попытка воспользоваться чужим кодом!", 14);
		$md5_phone = md5($phone);
		$phone = new Model_Phone();
		$phone->where('md5_phone','=',$md5_phone)->find();
		if(!$phone->loaded())
			throw new Exception("Алярм, алярм, попытка воспользоваться чужим кодом!", 14);
		$code = getCode($phone->id, $poll->id, $pin_code, $session_hash);
		if($code->used or $code->used_time)
			throw new Exception("Вы уже вводили этот код!", 15);
		// если мы дошли досюда, значит, все ок, проверяем голос.
		// проверка на лишние голоса и на голоса не от тех опросов
		$answers_ids = array_unique($answers_ids);
		foreach($answers_ids as $answer_id)
			if(!$poll->answers->where('id', '=', $answer_id)->count_all())
				throw new Exception("Неверный формат голоса.", 12);
		// get previews votes
		$prev_votes = ORM::factory('vote')
			->where('phone_id','=',$phone->id)
			->where('poll_id','=',$poll->id)
			->where('canceled','=',0)
			->find_all();		
		// Start the transaction
		$db = Database::instance();
		$db->begin();
		try
		{		
			$prew_answers_ids = array();
			foreach($prev_votes as $prev_vote)
			{
				$prew_answers_ids[] = $prev_vote->answer_id;
				if(!in_array($prev_vote->answer_id, $answers_ids))
				// кандидата нет среди новых кандидатов - отменяем голос, декрементим рейтинг
				{
					$answer = $prev_vote->answer;
					$prev_vote->canceled = 1;
					$prev_vote->save();
					DB::update('answers')
						->set(array('rating' => DB::expr('`rating` - 1')))
						->where('id', '=', $prev_vote->answer_id)
						->execute();
				};
			};
			$answers_to_add = array_diff($answers_ids, $prew_answers_ids); // новые голоса
			foreach($answers_to_add as $answer_id)
			{
				DB::update('answers')
					->set(array('rating' => DB::expr('`rating` + 1')))
					->where('id', '=', $answer_id)
					->execute();
				
				$vote = new Model_Vote();
				$vote->phone_id = $phone->id;
				$vote->code_id = $code->id;
				$vote->poll_id = $poll->id;
				$vote->answer_id = $answer_id;
				$vote->weight = 1; // for rating votes, temporarly
				$vote->save();
			}
			$code->used_time = date('Y-m-d H:i:s', time());
			$code->used = 1;
			$code->save();
			$session->delete($session_hash);
			// commit
			$db->commit();
			return array('message' => "Ваш голос учтен.");
		}
		catch(Exception $e)
		{
			//rollback
			$db->rollback();
			throw $e;
		}
	}
	
	public function action_index()
	{
		$method = $id = $this->request->param('method');
		try
		{
			if (method_exists($this, $method))
			{
				
				$result = array(
					'success' => true,
					'result' => call_user_func_array(array(&$this, $method), array()),
				);
			}
			else
				$result = array(
					'success' => false,
					'error' => "Method $method not exists",
					'errorcode' => 0,
				);
        }
        catch(Exception $e)
        {
			$result = array(
				'success' => false,
				'error' => $e->getMessage(),
				'errorcode' => $e->getCode(),
			);
		}
		echo json_encode($result);
	}
}
