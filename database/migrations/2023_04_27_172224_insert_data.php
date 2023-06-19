<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'administrador',
                'surname' => 'administrador',
                'phone' =>'000000000',
                'email' =>'admi@admi.com',
                'password' => bcrypt('123456789'),
                'role' => 'ADM'
            ],

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
                'interior_color' => 'rojo',
                'exterior_type' => 'pintura',
                'exterior_color' => 'verde',
            ],
            [
                'client_id' => '1',
                'number_plate' => '4758hfr',
                'interior_type' =>'sintético',
                'interior_color' => 'amarillo',
                'exterior_type' => 'pintura',
                'exterior_color' => 'gris',
            ],
            [
                'client_id' => '2',
                'number_plate' => '1785htr',
                'interior_type' =>'alcántara',
                'interior_color' => 'negro',
                'exterior_type' => 'vinilo',
                'exterior_color' => 'negro',
            ],
            [
                'client_id' => '2',
                'number_plate' => '1425mdl',
                'interior_type' =>'cuero',
                'interior_color' => 'gris',
                'exterior_type' => 'pintura',
                'exterior_color' => 'azul',
            ],
            [
                'client_id' => '2',
                'number_plate' => '1247kln',
                'interior_type' =>'tela',
                'interior_color' => 'azul',
                'exterior_type' => 'pintura',
                'exterior_color' => 'rojo',
            ]
        ]);

        DB::table('services')->insert([
            [
                'category_id' => '1',
                'name' =>'Lavado interior estándar',
                'description' => 'Limpieza profunda del interior de tu vehículo. Nuestro equipo se encargará de limpiar y desinfectar cada rincón.',
                'time' => '20',
                'price' => '15',
            ],
            [
                'category_id' => '1',
                'name' =>'Lavado interior premium',
                'description' => 'Limpieza exhaustiva con aspiración profunda de alfombras y tapicería, eliminación de manchas y olores',
                'time' => '30',
                'price' => '20',
            ],
            [
                'category_id' => '2',
                'name' =>'Lavado exterior estándar',
                'description' => 'Carrocería limpia. Elimina suciedad para un vehículo reluciente.',
                'time' => '10',
                'price' => '10',
            ],
            [
                'category_id' => '2',
                'name' =>'Lavado exterior premium',
                'description' => 'Lavado exterior del vehículo. Brillo intenso.',
                'time' => '20',
                'price' => '15',
            ],
            [
                'category_id' => '1',
                'name' =>'Limpieza de techo interior y paneles',
                'description' => 'Elimina manchas de techos y revestimientos.',
                'time' => '50',
                'price' => '45',
            ],
            [
                'category_id' => '1',
                'name' =>'Limpieza y acondicionamiento de cuero',
                'description' => 'Cuero limpio y protegido. Suavidad asegurada.',
                'time' => '90',
                'price' => '60',
            ],
            [
                'category_id' => '2',
                'name' =>'Encerado',
                'description' => 'Cera protectora para carrocería.',
                'time' => '50',
                'price' => '30',
            ],
            [
                'category_id' => '2',
                'name' =>'Pulido y abrillantado de carrocería',
                'description' => 'Elimina arañazos. Brillo intenso.',
                'time' => '120',
                'price' => '150',
            ],
            [
                'category_id' => '3',
                'name' =>'Restauración de faros delanteros',
                'description' => 'Mejora visibilidad y apariencia. Faros renovados.',
                'time' => '60',
                'price' => '70',
            ],
            [
                'category_id' => '4',
                'name' =>'Detallado completo',
                'description' => 'Lavado premium, limpieza interior, pulido, encerado y limpieza de motor.',
                'time' => '180',
                'price' => '120',
            ]
        ]);


    }


    public function down(): void
    {
        //
    }
};
