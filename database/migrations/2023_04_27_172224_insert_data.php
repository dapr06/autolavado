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
                'availability' => '1'
            ],
            [
                'name' => 'Afro',
                'surname' =>'De Carvalho',
                'DNI' => '1245789Z',
                'email' => 'afro@gmail.com',
                'role' => 'TRA',
                'turn' => '0',
                'availability' => '1'
            ],
            [
                'name' => 'Cristina',
                'surname' =>'Turón',
                'DNI' => '14700254C',
                'email' => 'cristina@gmail.com',
                'role' => 'TRA',
                'turn' => '0',
                'availability' => '1'
            ],
            [
                'name' => 'Daniela',
                'surname' =>'Prato',
                'DNI' => '47521368A',
                'email' => 'daniela@gmail.com',
                'role' => 'TRA',
                'turn' => '0',
                'availability' => '1'
            ],
            [
                'name' => 'Jorge',
                'surname' =>'Martinez',
                'DNI' => '75842366S',
                'email' => 'jorge@gmail.com',
                'role' => 'TRA',
                'turn' => '0',
                'availability' => '1'
            ]
        ]);
        DB::table('clients')->insert([
            [
                'name' =>'Cristina',
                'surname' => 'Turón',
                'phone' => '654987321',
                'email' => 'cristina@gmail.com',
            ],
            [
                'name' =>'Daniela',
                'surname' => 'Prato',
                'phone' => '654217895',
                'email' => 'daniela@gmail.com',
            ],
            [
                'name' =>'Maria',
                'surname' => 'Pérez',
                'phone' => '624851379',
                'email' => 'maria@gmail.com',
            ]
        ]);

        DB::table('categories')->insert([
            [
                'category' => 'interior',
            ],
            [
                'category' => 'exterior',
            ],
            [
                'category' => 'otros',
            ],
            [
                'category' => 'pack',
            ]
        ]);

        DB::table('vehicles')->insert([
            [
                'client_id' => '1',
                'number_plate' => '4978ldj',
                'interior_type' =>'cuero',
                'color' => 'rojo',
            ],
            [
                'client_id' => '1',
                'number_plate' => '4758hfr',
                'interior_type' =>'sintético',
                'color' => 'amarillo',
            ],
            [
                'client_id' => '2',
                'number_plate' => '1785htr',
                'interior_type' =>'sintético',
                'color' => 'negro',
            ],
            [
                'client_id' => '2',
                'number_plate' => '1425mdl',
                'interior_type' =>'cuero',
                'color' => 'gris',
            ],
            [
                'client_id' => '2',
                'number_plate' => '1247',
                'interior_type' =>'tela',
                'color' => 'azul',
            ]
        ]);

        DB::table('services')->insert([
            [
                'category_id' => '1',
                'name' =>'Lavado interior estándar',
                'description' => 'Lavado interior del vehículo.',
                'time' => '20',
                'price' => '15',
            ],
            [
                'category_id' => '1',
                'name' =>'Lavado interior premium',
                'description' => 'Lavado interior del vehículo.',
                'time' => '30',
                'price' => '20',
            ],
            [
                'category_id' => '2',
                'name' =>'Lavado exterior estándar',
                'description' => 'Lavado exterior del vehículo.',
                'time' => '10',
                'price' => '10',
            ],
            [
                'category_id' => '2',
                'name' =>'Lavado exterior premium',
                'description' => 'Lavado exterior del vehículo.',
                'time' => '20',
                'price' => '15',
            ],
            [
                'category_id' => '1',
                'name' =>'Limpieza de techo interior y paneles',
                'description' => 'Elimina manchas y suciedad de los paneles de techo y otros revestimientos interiores.',
                'time' => '50',
                'price' => '45',
            ],
            [
                'category_id' => '1',
                'name' =>'Limpieza y acondicionamiento de cuero',
                'description' => 'Limpia y nutre los asientos y revestimientos de cuero, dejándolos suaves y protegidos.',
                'time' => '90',
                'price' => '60',
            ],
            [
                'category_id' => '2',
                'name' =>'Encerado',
                'description' => 'Aplicación de cera protectora en la carrocería.',
                'time' => '50',
                'price' => '30',
            ],
            [
                'category_id' => '2',
                'name' =>'Pulido y abrillantado de carrocería',
                'description' => 'Elimina arañazos y marcas superficiales, dejando la carrocería con un brillo intenso.',
                'time' => '120',
                'price' => '150',
            ],
            [
                'category_id' => '3',
                'name' =>'Restauración de faros delanteros',
                'description' => 'Elimina el desgaste y la opacidad de los faros, mejorando la visibilidad y la apariencia del vehículo.',
                'time' => '60',
                'price' => '70',
            ],
            [
                'category_id' => '4',
                'name' =>'Detallado completo',
                'description' => 'Incluye lavado exterior premium, limpieza exhaustiva del interior, pulido de carrocería, encerado y limpieza de motor.',
                'time' => '180',
                'price' => '120',
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
