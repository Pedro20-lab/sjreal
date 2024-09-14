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
        Schema::create('detalle_reserva', function (Blueprint $table) {
            $table->id('id_detalle_reserva');
            $table->foreignId('detalle_id_reserva')->references('id_reserva')->on('reservas');
            $table->foreignId('detalle_id_habitacion')->references('id_habitacion')->on('habitaciones');
            $table->foreignId('detalle_id_huesped')->references('id_huesped')->on('huespedes');
            $table->date('checkin_hospedaje');
            $table->date('checkout_hospedaje');
            $table->enum('estado_hospedaje', ['Pendiente', 'En curso', 'Finalizado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_reserva');
    }
};
