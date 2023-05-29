<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        DB::table('users')->insert([

                'name' => 'administrador',
                'email' =>'admi@admi.com',
               'password' => bcrypt('123456789'),

        ]);

        DB::table('workers')->insert([
            [
            'name' => 'root',
            'surname' =>'root',
            'DNI' => '5555555A',
            'email' => 'root@root.com',
            'role' => 'ADMIN',
            'turn' => '1',
            'availability' => '1'],
            [
            'name' => 'a',
            'surname' =>'a',
            'DNI' => '5555555B',
            'email' => 'p@prueba.com',
            'role' => 'TRA',
            'turn' => '0',
            'availability' => '1'
                ]
        ]);

        DB::table('vehicles')->insert([
            [
                'number_plate' => '123aaa',
                'interior_type' =>'cuero',
                'color' => 'rojo',
                ],
            [
                'number_plate' => '321bbb',
                'interior_type' =>'sintetico',
                'color' => 'amarillo',
            ]
        ]);

        DB::table('services')->insert([
            [
                'name' =>'Lavado interior estándar',
                'description' => 'Lavado interior del vehículo.',
                'time' => '20',
                'price' => '15',
            ],
            [
                'name' =>'Lavado interior premium',
                'description' => 'Lavado interior del vehículo.',
                'time' => '30',
                'price' => '20',
            ],
            [
                'name' =>'Lavado exterior estándar',
                'description' => 'Lavado exterior del vehículo.',
                'time' => '10',
                'price' => '10',
            ],
            [
                'name' =>'Lavado exterior premium',
                'description' => 'Lavado exterior del vehículo.',
                'time' => '20',
                'price' => '15',
            ],
            [
                'name' =>'Limpieza de techo interior y paneles',
                'description' => 'Elimina manchas y suciedad de los paneles de techo y otros revestimientos interiores.',
                'time' => '50',
                'price' => '45',
            ],
            [
                'name' =>'Limpieza y acondicionamiento de cuero',
                'description' => 'Limpia y nutre los asientos y revestimientos de cuero, dejándolos suaves y protegidos.',
                'time' => '90',
                'price' => '60',
            ],
            [
                'name' =>'Encerado',
                'description' => 'Aplicación de cera protectora en la carrocería.',
                'time' => '50',
                'price' => '30',
            ],
            [
                'name' =>'Pulido y abrillantado de carrocería',
                'description' => 'Elimina arañazos y marcas superficiales, dejando la carrocería con un brillo intenso.',
                'time' => '120',
                'price' => '150',
            ],
            [
                'name' =>'Restauración de faros delanteros',
                'description' => 'Elimina el desgaste y la opacidad de los faros, mejorando la visibilidad y la apariencia del vehículo.',
                'time' => '60',
                'price' => '70',
            ],
            [
                'name' =>'Detallado completo',
                'description' => 'Incluye lavado exterior premium, limpieza exhaustiva del interior, pulido de carrocería, encerado y limpieza de motor.',
                'time' => '180',
                'price' => '120',
            ]
        ]);
        DB::table('clients')->insert([
            [
                'vehicle_id' => '1',
                'name' =>'pepe',
                'surname' => 'pepe',
                'phone' => '666666666',
                'email' => 'cliente@cliente.com',
            ],
            [
                'vehicle_id' => '2',
                'name' =>'maria',
                'surname' => 'pepe',
                'phone' => '666666667',
                'email' => 'cliente1@cliente.com',
            ]
        ]);
        DB::table('bookings')->insert([
            [
                'service_id' => '1',
                'client_id' =>'1',
                'vehicle_id' => '1',
                'date' => '2023/07/15',
                'hour' => '16:00',
                'number_services' => '3',
                'total_price' => '150',
            ],
            [
                'service_id' => '2',
                'client_id' =>'2',
                'vehicle_id' => '2',
                'date' => '2023/07/16',
                'hour' => '16:10',
                'number_services' => '2',
                'total_price' => '170',
            ]
        ]);
    }


    public function down(): void
    {
        //
    }
};
