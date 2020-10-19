<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Responsavel extends Migration
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
			'nome' => [
				'type' => 'VARCHAR',
				'constraint' => '100'
			]
		]);
		$this->forge->addKey('id', true);
        $this->forge->createTable('responsavel');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('responsavel');
	}
}
