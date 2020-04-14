<?php namespace App\Controllers;

class UploadFiles extends BaseController
{
	public function index()
	{
		$data = [
                'title' => 'UploadFile',
                'welcome' => 'Upload a file',
        ];

		echo view('templates/head',$data);
		echo view('templates/header',$data);
		
		echo view('templates/uploadfiles');
		
		
		

		echo view('templates/footer');
		//$path = $this->request->getFile('userfile')->store();
	}

	public function uploads()
	{
		echo "upload";
		if($imagefile = $this->request->getFiles())
		{echo "upload";
    		if($img = $imagefile['gfile'])
    		{echo "upload";
        		if ($img->isValid() && ! $img->hasMoved())
        		{
            		$newName = $img->getRandomName(); //This is if you want to change the file name to encrypted name
            		$img->move(WRITEPATH.'uploads', $newName);
            		echo view('templates/uploadfiles');
        		}
    		}
		}
	}

	//--------------------------------------------------------------------

}
