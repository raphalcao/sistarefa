<?php namespace App\Controllers;
use App\Models\AccountableModel;

class AccountableController extends BaseController

{
	public function index()
	{
		$model = new AccountableModel(); 
        $data['accountable'] = $model->orderBy('id', 'DESC')->findAll();
		
		echo view('viewheader');
		echo view('/accountable/taskaccountable', $data);
		echo view('viewfooter');
	}

	public function create()
	{
		
		echo view('viewheader');
		echo view('/accountable/formaccountable');
		echo view('viewfooter');
	}

	public function store()
	{

		helper(['form', 'url']);

		$model = new AccountableModel();

		$data = [
			'nome' => $this->request->getVar('nome'),
			
		];
		$model->insert($data);
		return redirect()->to(base_url('accountable'));
	}
	
	

	//--------------------------------------------------------------------

}
