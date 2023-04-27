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
               // 'password' => '$2y$10$U5Ihnkt.MdPL/uOJBN3YKu3mt/IqNP.SiUyl1yTXFKdfksERKse9C',
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
                'name' =>'limpiar',
                'description' => 'asnkjc',
                'price' => '25',
            ],
            [
                'worker_id' => '1',
                'name' =>'secar',
                'description' => 'secar',
                'price' => '20',
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
