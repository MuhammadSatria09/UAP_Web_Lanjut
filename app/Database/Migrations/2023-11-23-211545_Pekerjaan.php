<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pekerjaan extends Migration
{
    public function up()
    {

        $this->forge->addField([
            'id_pekerjaan' => [
                'type'  => 'INT',
                'constraint'    =>5,
                'unsigned'      =>true,
                'auto_increment'    =>true,
            ],

            'id_order' => [
                'type'      => 'INT',
                'constraint'    =>5,
                'unsigned'      => true,
            ],

            'nama_barang' => [
                'type'      => 'VARCHAR',
                'constraint'    =>255,

            ],

            'status' => [
                'type'      => 'VARCHAR',
                'constraint'    =>255,
                'default'       => null,

            ],

            'id_pekerja' => [
                'type'  => 'VARCHAR',
                'constraint'    =>5,
            ]
        ]);

        $this->forge->addForeignKey('id_order','order','id_order');
        $this->forge->addKey('id_pekerjaan',true,true);    
        $this->forge->createTable('pekerjaan');
    }

    public function down()
    {
        $this->forge->dropTable('pekerjaan', true);
    }
}
