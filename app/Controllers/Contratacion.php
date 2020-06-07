<?php namespace App\Controllers;

class Contratacion extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'YLIT Ltda',
                'navbar' => 'YLIT'
        ];
		echo view('templates/head',$data);
		echo view('templates/header');
		echo view('templates/navbar',$data);
		echo view('separador');
		echo view('contratacion');
		echo view('separador');
		//echo view('templates/cards');
		//echo view('separador');
		echo view('templates/contacto');
		echo view('separador');
		echo view('templates/footer');
		//echo view('welcome_message');
	}

	public function contratacion()
	{
		
	}
}

