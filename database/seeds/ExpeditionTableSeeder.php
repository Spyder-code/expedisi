<?php

use App\Expedition;
use Illuminate\Database\Seeder;

class ExpeditionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expedition::create([
            'nama' => 'Kapal Pelni'
        ]);
        Expedition::create([
            'nama' => 'Pesawat'
        ]);
        Expedition::create([
            'nama' => 'Kapal Cargo'
        ]);
    }
}
