<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categoria';

    protected $primarykey = 'id';

    protected $allowedFields = ['descricao'];

    public function getCategory($id = null)
    {
            if ($id === null){
            return $this->findAll(); 
        }
        return $this->asArray()->where(['id' => $id])->first();
    }
}
