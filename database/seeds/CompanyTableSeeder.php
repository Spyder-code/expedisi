<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'nama' => 'Rizalgo ekspedisi',
            'alamat' => 'depo Temas jalan kalianak no 55L .SBY',
            'logo' => 'default.jpg',
            'nomor' => '081217073922',
        ]);
    }
}
