<?php


class UsersController
{
	

	public function index()
	{

		$users = App::get('database')->selectAllTasks('users');

		return view('users',[ 'users' => $users]);
	}


	public function store()
	{

		App::get('database')->insert('users', [

				'name' => $_POST['name']

			]);


		return redirect('users');
	}



}