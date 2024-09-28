<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alquileres', function (Blueprint $table) {
            $table->id();
            $table->time("hora_inicio");
            $table->time('hora_fin')->nullable();
            $table->string('documento', length:10);
            $table->unsignedBigInteger('bicicleta_id')->nullable();
            $table->foreign('bicicleta_id')->references('id')->on('bicicletas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alquileres');
    }
};
