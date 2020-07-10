<?php

use App\Area;
use Illuminate\Database\Seeder;

class AreaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'id_expedisi' => 1,
            'harga' => 350000,
            'berat' => 'Koly',
            'dari' => 'Surabaya',
            'tujuan' => 'Ambon'
        ]);
        Area::create([
            'id_expedisi' => 1,
            'harga' => 2200000,
            'berat' => 'Ton',
            'dari' => 'Surabaya',
            'tujuan' => 'Ambon'
        ]);
        Area::create([
            'id_expedisi' => 2,
            'harga' => 55000,
            'berat' => 'Kg',
            'dari' => 'Surabaya',
            'tujuan' => 'Ambon'
        ]);
        Area::create([
            'id_expedisi' => 3,
            'harga' => 12500000,
            'berat' => 'Kontener',
            'dari' => 'Surabaya',
            'tujuan' => 'Ambon'
        ]);
        Area::create([
            'id_expedisi' => 3,
            'harga' => 550000,
            'berat' => 'Ton',
            'dari' => 'Surabaya',
            'tujuan' => 'Ambon'
        ]);
    }
}
