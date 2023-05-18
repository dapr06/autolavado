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
                'worker_id' => '2',
                'name' =>'Lavado exterior',
                'description' => '20min. Lavado exterior del vehículo.',
                'price' => '15',
            ],
            [
                'worker_id' => '2',
                'name' =>'Lavado exterior premium',
                'description' => 'Incluye lavado a presión, eliminación de suciedad incrustada, limpieza de llantas y abrillantado de neumáticos.',
                'price' => '22',
            ],
            [
                'worker_id' => '2',
                'name' =>'Lavado exterior e interior estándar',
                'description' => '45-60min. Incluye lavado exterior básico y limpieza de alfombras, asientos y salpicadero.',
                'price' => '35',
            ],
            [
                'worker_id' => '2',
                'name' =>'Lavado exterior e interior premium',
                'description' => '1-1ymedia. Incluye lavado exterior premium y limpieza a fondo de tapicería, paneles de puertas, consola central y ventanas.',
                'price' => '50',
            ],
            [
                'worker_id' => '2',
                'name' =>'Servicio de encerado',
                'description' => '40-60min. Aplicación de cera protectora en la carrocería.',
                'price' => '30',
            ],
            [
                'worker_id' => '2',
                'name' =>'Pulido y abrillantado de carrocería',
                'description' => '2h. Elimina arañazos y marcas superficiales, dejando la carrocería con un brillo intenso.',
                'price' => '150',
            ],
            [
                'worker_id' => '1',
                'name' =>'Restauración de faros delanteros',
                'description' => '1h. Elimina el desgaste y la opacidad de los faros, mejorando la visibilidad y la apariencia del vehículo.',
                'price' => '70',
            ],
            [
                'worker_id' => '1',
                'name' =>'Limpieza y acondicionamiento de cuero',
                'description' => '1-2h. Limpia y nutre los asientos y revestimientos de cuero, dejándolos suaves y protegidos.',
                'price' => '60',
            ],
            [
                'worker_id' => '1',
                'name' =>'Limpieza de techo interior y paneles',
                'description' => '30-1h. Elimina manchas y suciedad de los paneles de techo y otros revestimientos interiores.',
                'price' => '45',
            ],
            [
                'worker_id' => '1',
                'name' =>'Detallado completo',
                'description' => '2-4h. Incluye lavado exterior premium, limpieza exhaustiva del interior, pulido de carrocería, encerado y limpieza de motor.',
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
