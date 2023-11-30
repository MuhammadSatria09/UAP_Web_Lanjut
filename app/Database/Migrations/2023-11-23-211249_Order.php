<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Order extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'id_order' => [
                'type'      => 'INT',
                'constraint'    =>5,
                'unsigned'      => true,
                'auto_increment'    =>true
            ],

            'nama_barang' => [
                'type'      => 'VARCHAR',
                'constraint'    =>255,

            ],

            'harga' => [
                'type'      => 'DECIMAL',
                'constraint'    =>'10',
                'default'       => 50000
            ],

            'status' => [
                'type'      => 'INT',
                'constraint'    =>5,
                'default'       => 0,

            ],

            'customer_id' => [
                'type'      => 'INT',
                'constraint'    =>5,
                'unsigned'      => true,

            ],

            'foto' => [
                'type'      => 'TEXT',
                'constraint'    =>255,

            ],
        ]);

        $this->forge->addKey('id_order',true,true);
        $this->forge->createTable('order');
    }

    public function down()
    {
        $this->forge->dropTable('order', true);
    }
}
