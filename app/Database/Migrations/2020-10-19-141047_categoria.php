<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categoria extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unique' => TRUE,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'descricao' => [
				'type' => 'VARCHAR',
				'constraint' => '100',
				'null' => FALSE
			]
		]);
		$this->forge->addKey('id', true);
        $this->forge->createTable('categoria');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('categoria');
	}
}
