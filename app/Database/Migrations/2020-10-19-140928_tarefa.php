<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tarefa extends Migration
{
	public function up()
	{
		$this->db->disableForeignKeyChecks();

		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unique' => TRUE,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			],
			'descicao' => [
				'type' => 'TEXT',
				'null' => TRUE
			],
			'id_responsavel' => [
				'type' => 'INT',
				'unique' => TRUE,
				'unsigned' => TRUE
			],
			'id_categoria' => [
				'type' => 'INT',
				'unique' => TRUE,
				'unsigned' => TRUE
			],
			'data_fim_tarefa' => [
				'type' => 'DATETIME',
				'default' => NULL
			],

		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_responsavel','responsavel','id','CASCADE','CASCADE');
		$this->forge->addForeignKey('id_categoria','categoria','id','CASCADE','CASCADE');
		$this->forge->createTable('tarefa');
		$this->db->enableForeignKeyChecks();
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('tarefa');
	}
}
