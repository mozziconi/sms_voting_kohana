<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Template
{
	
	public function action_index()
	{
		$view = View::factory('about/index');
		$this->template->title = 'О сайте';
		$this->template->content = $view;
	}
}