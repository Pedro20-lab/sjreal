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
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('id_reserva');
            $table->foreignId('reserva_id_usuario')->references('id_usuario')->on('usuarios');
            $table->string('codigo_reserva');
            $table->date('checkin_reserva');
            $table->date('checkout_reserva');
            $table->integer('cantidad_habitaciones_reserva');
            $table->double('precio_total_reserva');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};
