<?php 

namespace App\Controllers;
use App\Models\AssigmentModel;
use App\Models\AccountableModel;
use App\Models\CategoryModel;

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
		$modelaccountable = new AccountableModel();
		$modelcategory = new CategoryModel();

		$accountable['accountable'] = $modelaccountable->orderBy('id', 'DESC')->findAll();
		$category['category'] = $modelcategory->orderBy('id', 'DESC')->findAll();	
		echo view('viewheader');
		echo view('/assigment/formtask', $accountable, $category );
		echo view('viewfooter');
	}

	public function store()
	{

		helper(['form', 'url']);

		$model = new AssigmentModel();

		$data = [
			'descricao' => $this->request->getVar('descricao'),
			'id_responsavel' => $this->request->getVar('responsavel'),
			'id_categoria' => $this->request->getVar('categoria'),
			'data_fim_tarefa' => $this->request->getVar('data_termino'),
		];
		$model->insert($data);
		return redirect()->to(base_url('/'));
	}
	
	

	//--------------------------------------------------------------------

}
