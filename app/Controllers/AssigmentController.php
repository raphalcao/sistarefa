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
		echo view('/assigment/formtask');
		echo view('viewfooter');
	}

	public function store()
	{

		helper(['form', 'url']);

		$model = new AssigmentModel();

		$data = [
			'descricao' => $this->request->getVar('descricao'),
			'id_responsavel' => $this->request->getVar('descricao'),
			'id_categoria' => $this->request->getVar('descricao'),
			'data_fim_tarefa' => $this->request->getVar('descricao'),
		];
		$model->insert($data);
		return redirect()->to(base_url('assigment'));
	}
	
	

	//--------------------------------------------------------------------

}
