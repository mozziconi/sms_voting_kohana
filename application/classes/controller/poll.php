<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Poll extends Controller_Template
{
	public function action_actual()
	{
		// create view instance
		$view = View::factory('poll/list');
		//
		$timestamp = date('Y-m-d H:i:s', time());
		
		$view->polls = ORM::factory('poll')
			->where('start_date','<=',$timestamp)
			->where('end_date','>',$timestamp)
			->order_by('start_date','desc')
			->find_all();
			
		//render view
		//$this->response->body($view);
		$this->template->content = $view;
	}
	public function action_archive()
	{
	}
	public function action_poll()
	{
		$id = $this->request->param('id');
		
		// create view instance
		$view = View::factory('poll/item');
		// time());

		$poll = ORM::factory('poll',$id);
		$view->poll = $poll;
		$view->votes = $poll->votes
			->order_by('created','desc')
			->limit(100)
			->find_all();
			
		//render view
		$this->template->nt = isset($_GET['nt']);
		$this->template->content = $view;
	}
}
