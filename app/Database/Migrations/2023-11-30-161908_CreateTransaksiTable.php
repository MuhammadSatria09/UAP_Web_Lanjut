<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksiTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'  => 'INT',
                'constraint'        =>11,
                'unsigned'          =>true,
                'auto_increment'    =>true,
            ],

            'id_pelanggan' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      =>true,
            ],

            'id_karyawan' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      =>true,
            ],

            'id_barang' => [
                'type'          => 'INT',
                'constraint'    => 11,
                'unsigned'      =>true,
            ],

            'jumlah' => [
                'type'          => 'INT',
                'constraint'    => 11,
            ],

            'total_harga' => [
                'type'          => 'INT',
                'constraint'    => 11,
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
        ]);

        $this->forge->addKey('id', true, true);
        $this->forge->addForeignKey('id_pelanggan','users','id');
        $this->forge->addForeignKey('id_karyawan','users','id');
        $this->forge->addForeignKey('id_barang','katalog','id');
        $this->forge->createTable('transaksi', true);
    }

    public function down()
    {
        $this->forge->dropTable('transaksi', true);
    }
}
