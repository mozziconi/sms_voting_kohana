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
			->where('active','=',1)
			->where('start_date','<=',$timestamp)
			->or_where_open()
			->where('end_date','>',$timestamp)
			->where('end_date','=',null)
			->or_where_close()
			->order_by('start_date','desc')
			->find_all();

		$this->template->title = 'Актуальные голосования';
		$this->template->content = $view;
	}
	public function action_archive()
	{
		// create view instance
		$view = View::factory('poll/list');
		//
		$timestamp = date('Y-m-d H:i:s', time());
		
		$view->polls = ORM::factory('poll')
			->or_where_open()
			->where('active','=',0)
			->where('end_date','<',$timestamp)
			->or_where_close()
			->order_by('start_date','desc')
			->find_all();
		$this->template->title = 'Архив голосований';
		$this->template->content = $view;
	}
	public function action_future()
	{
		// create view instance
		$view = View::factory('poll/list');
		//
		$timestamp = date('Y-m-d H:i:s', time());
		
		$view->polls = ORM::factory('poll')
			->where('start_date','>',$timestamp)
			->order_by('start_date','desc')
			->find_all();
		$this->template->title = 'Будущие голосования';
		$this->template->content = $view;
	}
	public function action_poll()
	{
		$id = $this->request->param('id');
		$view = $this->request->param('view');
		$this->template->nt = isset($_GET['nt']);
		
		// create view instance
		if($view)
		{
			$view = View::factory("poll/$view");
			$this->template->nt = true;
		}
		else
			$view = View::factory('poll/item');
		
		$poll = ORM::factory('poll',$id);
		$view->poll = $poll;
			
		//render view
    $region_count = $poll->regions->count_all();
    $view->region_count = $region_count;
    if($region_count == 1)
    {
      $region = $poll->regions->find();
      $this->template->title = ($poll->title . ', '. $region->name);
    }
    else
      $this->template->title = $poll->title;
      
		$this->template->content = $view;
	}
}
