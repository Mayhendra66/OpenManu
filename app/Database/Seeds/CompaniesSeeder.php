<?php

namespace App\Database\Seeds;

use App\Models\CompaniesModels;
use App\Models\UserModels;
use CodeIgniter\Database\Seeder;



class CompaniesSeeder extends Seeder
{
    public function run()
    {
        $modelUser = new UserModels();
        $modelCompanies = new CompaniesModels();

        $user = $modelUser->where('email', 'admin@gmail.com')->first();

        if (!$user) {
            throw new \Exception('Lakukan Seeder Terlebih Dahulu');
        }

        $modelCompanies->insert([
            'namecompany' => 'PT. ADMIN',
            'emailcompany' => 'admincompanies@gmail.com',
            'numbercompany' => '081234567891',
            'addresscompany' => 'JAKARTA',
            'user_id' => $user['id']
        ]);


    }
}
