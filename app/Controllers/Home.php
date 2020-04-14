<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
<<<<<<< HEAD
		return view('welcome_message');
=======
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
>>>>>>> e1c3fd69c32bd7138ced556d012be91a6049db23
	}

	//--------------------------------------------------------------------

}
