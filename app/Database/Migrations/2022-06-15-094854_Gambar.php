<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Gambar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nama_file' => [
                'type' => 'VARCHAR',
                'constraint' => 200,
            ],
            'tipe_file' => [
                'type' => 'VARCHAR',
                'constraint' => 200
            ]
        ]);

        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('gambar');
    }

    public function down()
    {
        $this->forge->dropTable('gambar');
    }
}
