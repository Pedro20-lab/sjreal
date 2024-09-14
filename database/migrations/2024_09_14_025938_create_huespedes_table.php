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
        Schema::create('huespedes', function (Blueprint $table) {
            $table->id('id_huesped');
            $table->string('nombre_huesped');
            $table->string('apellido_huesped');
            $table->string('documento_huesped');
            $table->string('tipo_documento_huesped');
            $table->string('edad_huesped');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huespedes');
    }
};
