<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Template
{	
	public function action_index()
	{
		$view = View::factory('about/index');
		$this->template->title = 'О проекте';
		$this->template->content = $view;
	}
	public function action_authors()
	{
		$view = View::factory('about/authors');
		$this->template->title = 'Авторы';
		$this->template->content = $view;
	}
	public function action_faq()
	{
		$view = View::factory('about/faq');
		$this->template->title = 'Часто задаваемые вопросы';
		$this->template->content = $view;
	}
}