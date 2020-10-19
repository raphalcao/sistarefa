<?php namespace App\Controllers;

class AccountableController extends BaseController
{
	public function index()
	{
		
		echo view('viewheader');
		echo view('/accountable/taskaccountable');
		echo view('viewfooter');
	}

	public function create()
	{
		
		echo view('viewheader');
		echo view('/accountable/newaccountable');
		echo view('viewfooter');
	}
	
	

	//--------------------------------------------------------------------

}
