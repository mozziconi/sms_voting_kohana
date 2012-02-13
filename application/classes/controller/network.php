<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Network extends Controller {

	public function action_index()
	{
		// create view instance
		$view = View::factory('network/list');
		// 
		$view->networks = ORM::factory('network')->find_all();;
		//render view
		$this->response->body($view);
	}

}
