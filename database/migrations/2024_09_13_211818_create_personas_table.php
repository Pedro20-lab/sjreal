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
        Schema::create('personas', function (Blueprint $table) {
            $table->id('id_persona');
            $table->string('nombre_persona');
            $table->string('apellido_persona');
            $table->string('documento_persona')->unique();
            $table->string('telefono_persona');
            $table->enum('tipo_documento_persona', ['Cedula', 'Pasaporte', 'Cedula de extranjeria', 'Tarjeta de identidad', 'Registro civil', 'PPT']);
            $table->enum('genero_persona', ['Masculino', 'Femenino', 'Otro']);
            $table->integer('edad_persona');
            $table->enum('tipo_persona', ['Persona natural', 'Persona juridica']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
