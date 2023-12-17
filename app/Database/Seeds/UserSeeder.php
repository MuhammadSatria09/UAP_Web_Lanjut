<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;
use Myth\Auth\Password;

class UserSeeder extends Seeder
{
    public function run()
    {
        $user_myth = new UserModel();

        $user_myth->withGroup('Admin')->save([
            'email' => 'Admin@gmail.com',
            'username' => 'Admin',
            'password_hash' => Password::hash('9april03'),
            'active' => 1,
        ]);
        
        $user_myth->withGroup('Worker')->save([
            'email' => 'Worker@gmail.com',
            'username' => 'Worker',
            'password_hash' => Password::hash('9april03'),
            'active' => 1,
        ]);

        $user_myth->withGroup('Customer')->save([
            'email' => 'Customer@gmail.com',
            'username' => 'Customer',
            'password_hash' => Password::hash('9april03'),
            'active' => 1,
        ]);
    }
}
