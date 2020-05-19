<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'YLIT Ltda',
                'welcome' => 'YLIT'
        ];
		echo view('templates/head',$data);
		echo view('templates/navbar',$data);
		echo view('separador');
		echo view('ylit');
		echo view('separador');
		echo view('cards');
		echo view('separador');
		echo view('contacto');
		echo view('separador');
		echo view('templates/footer');
		//echo view('welcome_message');
	}

	

}
