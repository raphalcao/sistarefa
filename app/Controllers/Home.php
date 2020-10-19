<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		
		echo view('viewheader');
		echo view('/assigment/taskrecord');
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
