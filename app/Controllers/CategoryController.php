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
		echo view('/category/newcategory');
		echo view('viewfooter');
	}

	public function store()
	{
		helper(['form', 'url']);
         
        $model = new CategoryModel();
		
        $data = [
            'descricao' => $this->request->getVar('category'),
            ];
        $save = $model->insert($data);
		return redirect()->to( base_url('category') );
	}

	public function edit($id = null)
    {
      
     $model = new CategoryModel();
 
     $data['descricao'] = $model->where('id', $id)->first();
 
     return view('taskcategory', $data);
    }
 
	//--------------------------------------------------------------------

}
