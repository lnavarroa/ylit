<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'Template',
                'welcome' => 'Bienvenido'
        ];
		echo view('templates/head',$data);
		echo view('templates/header',$data);
		echo view('templates/navbar');
		echo view('templates/header',$data);
	}

	//--------------------------------------------------------------------

}
