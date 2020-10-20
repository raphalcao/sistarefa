<?php

namespace App\Controllers;

use App\Models\CategoryModel;

class CategoryController extends BaseController
{
	public function index()
	{
		$model = new CategoryModel();
		$data['category'] = $model->orderBy('id', 'DESC')->findAll();

		echo view('viewheader');
		echo view('/category/taskcategory', $data);
		echo view('viewfooter');
	}

	public function create()
	{
		echo view('viewheader');
		echo view('/category/formcategory');
		echo view('viewfooter');
	}

	public function store()
	{

		helper(['form', 'url']);

		$model = new CategoryModel();

		$data = [
			'descricao' => $this->request->getVar('descricao'),
		];
		$model->insert($data);
		return redirect()->to(base_url('category'));
	}

	public function edit($id = null)
	{

		$model = new CategoryModel();

		$data['categoria'] = $model->where('id', $id)->first();

		echo view('viewheader');
		echo view('/category/taskcategory');
		echo view('viewfooter');
	}


	public function update()
	{

		helper(['form', 'url']);

		$model = new CategoryModel();

		$id = $this->request->getVar('id');

		$data = [
			'descricao' => $this->request->getVar('descricao'),
		];

		$model->update($id, $data);

		return redirect()->to(base_url('category'));
	}

	public function delete($id = null)
	{
		$model = new CategoryModel();
		$data['id'] = $model->where('id', $id)->delete();
		return redirect()->to(base_url('category'));
	}
	//--------------------------------------------------------------------

}
