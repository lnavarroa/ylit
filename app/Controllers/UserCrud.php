<?php namespace App\Controllers;

class UserCrud extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'Login',
                'welcome' => 'Bienvenido',
                'navbrand' => 'Ingreso de usuario'
        ];
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/navbar',$data);
		echo view('templates/carousel');
		echo view('templates/cards');
		echo view('templates/content');
		echo view('templates/footer');
	}



	public function createUser()
	{	
		helper('form');
		$data = [
                'title' => 'Registro',
                'welcome' => 'Bienvenido',
                'navbrand' => 'Crear cuenta de usuario'
        ];
       	
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/navbar',$data);
		echo view('templates/loginForm');
		echo form_open('UserCrud/createUser');
		echo form_input('username', 'ingrese username');
		echo form_input('email', 'myEmail@example.com', ['placeholder' => 'Email Address...'], 'email');
		echo form_password('password','pass');
		echo form_submit('create', 'Submit');
		echo form_close();
		//echo view('templates/carousel');
		//echo view('templates/cards');
		//echo view('templates/content');
		echo view('templates/footer');

		
	}



	public function readUser()
	{	
		$data = [
                'title' => 'Template',
                'welcome' => 'Bienvenido',
                'navbrand' => 'Template'
        ];
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/navbar',$data);
		echo view('templates/carousel');
		echo view('templates/cards');
		echo view('templates/content');
		echo view('templates/footer');


	}



	public function updateUser()
	{
		$data = [
                'title' => 'Template',
                'welcome' => 'Bienvenido',
                'navbrand' => 'Template'
        ];
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/navbar',$data);
		echo view('templates/carousel');
		echo view('templates/cards');
		echo view('templates/content');
		echo view('templates/footer');
	}



	public function deleteUser()
	{
		$data = [
                'title' => 'Template',
                'welcome' => 'Bienvenido',
                'navbrand' => 'Template'
        ];
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/navbar',$data);
		echo view('templates/carousel');
		echo view('templates/cards');
		echo view('templates/content');
		echo view('templates/footer');
	}
}

