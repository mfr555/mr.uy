<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Pack;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        $webStarterPack = [
            'name' => 'Web Starter',
            'home_index' => 1,
            'available' => true,
            'price' => 599,
            'offer_price' => 299,
            'color' => 'violeta',
            'items' => [
                ['name' => 'Página web profesional', 'included' => true],
                ['name' => 'Hosting', 'included' => true],
                ['name' => 'Dominio (Ejemplo: tuempresa.com.uy)', 'included' => true],
                ['name' => 'Correo empresarial (1 cuenta @tuempresa.com.uy)', 'included' => true],
                ['name' => 'Soporte técnico dedicado', 'included' => true],
                ['name' => 'Varias subpáginas', 'included' => false],
                ['name' => 'Sección blog / noticias', 'included' => false],
            ],
            'info' => [
                'Perfecto comenzar en internet con soporte garantido',
            ],
            'more_info' => [
                'U$S 40 / año para mantenerla activa',
            ],
            'featured' => true,
        ];

        $webEstandarPack = [
            'name' => 'Web Estándar',
            'home_index' => 2,
            'available' => true,
            'price' => 699,
            'offer_price' => 449,
            'color' => 'naranja',
            'items' => [
                ['name' => 'Página web profesional', 'included' => true],
                ['name' => 'Hosting', 'included' => true],
                ['name' => 'Dominio (Ejemplo: tuempresa.com.uy)', 'included' => true],
                ['name' => 'Correo empresarial (+5 cuentas @tuempresa.com.uy)', 'included' => true],
                ['name' => 'Soporte técnico dedicado', 'included' => true],
                ['name' => '+5 subpáginas web', 'included' => true],
                ['name' => 'Sección blog / noticias', 'included' => false],
            ],
            'info' => [
                'Ideal para Pymes y profesionales',
            ],
            'more_info' => [
                'Desde U$S 60 / año para mantenerla activa',
            ],
            'featured' => false,
        ];

        $webCorporativaPack = [
            'name' => 'Web Corporativa',
            'home_index' => 3,
            'available' => true,
            'price' => 1299,
            'offer_price' => 999,
            'color' => 'dark',
            'items' => [
                ['name' => 'Página web profesional', 'included' => true],
                ['name' => 'Hosting', 'included' => true],
                ['name' => 'Dominio (Ejemplo: tuempresa.com.uy)', 'included' => true],
                ['name' => 'Correo empresarial (Cuentas ilimitadas @tuempresa.com.uy)', 'included' => true],
                ['name' => 'Soporte técnico dedicado', 'included' => true],
                ['name' => '+20 subpáginas web', 'included' => true],
                ['name' => 'Sección blog / noticias', 'included' => true],
            ],
            'info' => [
                'La mejor solución para empresas',
            ],
            'more_info' => [
                'Desde U$S 60 / año para mantenerla activa',
            ],
            'featured' => false,
        ];

        $packs = [
            $webStarterPack,
            $webEstandarPack,
            $webCorporativaPack,
        ];

        foreach ($packs as $packData) {
            Pack::updateOrCreate(
                ['name' => $packData['name']],
                [
                    'home_index' => $packData['home_index'],
                    'available' => $packData['available'],
                    'price' => $packData['price'],
                    'offer_price' => $packData['offer_price'],
                    'color' => $packData['color'],
                    'items' => json_encode($packData['items']),
                    'info' => json_encode($packData['info']),
                    'more_info' => json_encode($packData['more_info']),
                    'featured' => $packData['featured'],
                ]
            );
        }

    }
}
