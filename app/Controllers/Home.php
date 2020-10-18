<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		echo view('viewheader');
		echo view('/assigment/taskrecord');
		echo view('viewfooter');
	}
	

	//--------------------------------------------------------------------

}
