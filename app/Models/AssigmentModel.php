<?php

namespace App\Models;

use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;

class AssigmentModel extends Model
{
    protected $table = 'tarefa';

    protected $allowedFields = ['descicao', 'id_responsavel', 'id_categoria', 'data_fim_tarefa'];
}
