<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nama_barang' => $faker->city,
                'harga' => $faker->randomNumber(6),
                'status' => $faker->randomElement(['Belum Dikerjaan', 'Proses', 'Selesai']),
            ];

            $this->db->table('order')->insert($data);
        }
    }
}
