<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Client;


return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Client::class)
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->char('number_plate', 7);
            $table->string('interior_type', 20);
            $table->string('interior_color', 20);
            $table->string('exterior_type', 20);
            $table->string('exterior_color',20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
