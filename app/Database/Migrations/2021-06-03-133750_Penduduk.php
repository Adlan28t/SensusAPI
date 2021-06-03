<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penduduk extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nik' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
			'nama_penduduk' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'jenis_kelamin' => [
				'type' => 'ENUM',
				'constraint' => "'laki-laki','perempuan'",
			],
			'tanggal_lahir' => [
				'type' => 'DATE',
			],
			'Alamat' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
			],
			'Agama' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
			'Pekerjaan' => [
				'type' => 'VARCHAR',
				'constraint' => '20',
			],
		]);
		$this->forge->addPrimaryKey('nik');
		$this->forge->createTable('penduduk');
	}

	public function down()
	{
		$this->forge->dropTable('penduduk');
	}
}
