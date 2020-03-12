<?php


class PagesController
{



	public function home()
	{


		$users = App::get('database')->selectAllTasks('users');


		require 'views/index.view.php';
	}



	public function about()
	{

		require 'views/about.view.php';

	}


	public function contact()
	{

		require 'views/contact.view.php';

	}

	public function about_culture()
	{
	
		require 'views/about-culture.view.php';

	}

}