<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Range extends Controller
{
	public function action_index()
	{
		// create view instance
		$view = View::factory('range/list');
		// 
		$view->ranges = ORM::factory('range')->find_all();
		//render view
		$this->response->body($view);
	}
}
