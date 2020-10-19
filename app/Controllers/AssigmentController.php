<?php 

namespace App\Controllers;
use App\Models\AssigmentModel;

class AssigmentController extends BaseController
{
	public function index()
	{

		$model = new AssigmentModel(); 
        $data['assigment'] = $model->orderBy('id', 'DESC')->findAll();
        
		echo view('viewheader');
		echo view('/assigment/taskrecord', $data);
		echo view('viewfooter');
	}

	public function create()
	{
		
		echo view('viewheader');
		echo view('/assigment/newtask');
		echo view('viewfooter');
	}
	
	

	//--------------------------------------------------------------------

}
