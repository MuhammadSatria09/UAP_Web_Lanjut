<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddKatalogTable extends Migration
{
    public function up()
    {
        $this->forge->addField(
            [
                'id' => [
                    'type'           => 'INT',
                    'constraint'     => 11,
                    'unsigned'       => true,
                    'auto_increment' => true,
                ],
                'nama_produk' => [
                    'type'          => 'VARCHAR',
                    'constraint'    => '255',
                ],
                'harga' => [
                    'type'          => 'DECIMAL',
                    'constraint'    => '10',
                ],
                'foto' => [
                    'type' => 'VARCHAR',
                    'constraint' => 255,
                    'null' => true,
                ],
                'created_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'updated_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ],
                'deleted_at' => [
                    'type' => 'DATETIME',
                    'null' => true,
                ]
            ]
        );
        $this->forge->addKey('id', true);
        $this->forge->createTable('katalog', true);
    }

    public function down()
    {
        $this->forge->dropTable('katalog', true);
    }
}
