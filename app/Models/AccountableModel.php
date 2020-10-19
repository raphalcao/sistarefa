<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class AccountableModel extends Model
{
    protected $table = 'responsavel';

    protected $allowedFields = ['nome'];
}
