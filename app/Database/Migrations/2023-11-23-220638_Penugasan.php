<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Penugasan extends Migration
{
    public function up()
    {
        $this->forge->addField([

            'id_penugasan' => [
                'type'  => 'INT',
                'constraint'    =>5,
                'unsigned'      =>true,
                'auto_increment'    =>true,
            ],
            
            'id_order'=> [
                'type'  => 'INT',
                'constraint'    => 5,
                'unsigned'      => true,
            ],

            'id_pekerja' => [
                'type'  => 'VARCHAR',
                'constraint'    =>5,
            ]

        ]);

        $this->forge->addForeignKey('id_order','order','id_order','CASCADE' ,'CASCADE');
        $this->forge->addKey('id_penugasan',true,true);    
        $this->forge->createTable('penugasan');
    }

    public function down()
    {
        $this->forge->dropTable('penugasan', true);
    }
}
