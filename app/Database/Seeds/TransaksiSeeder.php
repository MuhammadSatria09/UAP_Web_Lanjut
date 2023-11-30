<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\TransaksiModel;

class TransaksiSeeder extends Seeder
{
    public function run()
    {
        $transaksiModel = new TransaksiModel();

        $transaksiModel->saveTransaksi([
            'id_pelanggan' => 10,
            'id_karyawan' => 8,
            'id_barang' => 1,
            'jumlah' => 1,
            'total_harga' => 3000000,
        ]);
    }
}
