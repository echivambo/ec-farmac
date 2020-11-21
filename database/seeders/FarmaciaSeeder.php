<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FarmaciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('farmacias')->insert([
            'nome' => 'Farmácia Stefane',
            'endereco' => 'Av. 4 de Outubro, 412',
            'latitude' => 32.467262,
            'longitude' => -25.9247748,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s')
        ]);
        DB::table('farmacias')->insert([
            'nome' => 'Farmácia Manuel Parte Coco',
            'endereco' => 'Av. das Indústrias, Maputo',
            'latitude' => 32.4892836,
            'longitude' => -25.9099234,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s')
        ]);
        DB::table('farmacias')->insert([
            'nome' => 'Farmácia Alvor',
            'endereco' => '4H79+Q4 Maputo',
            'latitude' => 32.5576383,
            'longitude' => -25.8864972,
            'created_at' => date('y-m-d H:i:s'),
            'updated_at' => date('y-m-d H:i:s')
        ]);
    }
}
