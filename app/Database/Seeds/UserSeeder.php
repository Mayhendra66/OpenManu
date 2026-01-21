<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModels;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = new UserModels();

        $model->insert([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'number' => '081234567891',
            'password' => password_hash('123456', PASSWORD_DEFAULT)
        ]);
    }
}
