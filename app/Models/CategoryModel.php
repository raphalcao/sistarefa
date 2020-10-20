<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categoria';

    protected $allowedFields = ['descricao'];
    
}
