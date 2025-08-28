<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cupon;

class CuponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cupon::truncate();

        Cupon::create([
            'codigo' => 'AMIGOS-SET25',
            'porcentaje_descuento' => 35,
            'valido_hasta' => '2025-09-30',
            'limite_uso' => 100,
            'veces_usado' => 0,
        ]);

        Cupon::create([
            'codigo' => 'FB-FRIENDS-25',
            'porcentaje_descuento' => 25,
            'valido_hasta' => '2025-09-30',
            'limite_uso' => 100,
            'veces_usado' => 0,
        ]);
    }
}
