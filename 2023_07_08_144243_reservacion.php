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
        Schema::create('reservacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('responsable');
            $table->unsignedInteger('dui');
            $table->string('direccion');
            $table->unsignedInteger('telefono');
            $table->unsignedInteger('cantidad_personas');
            $table->unsignedInteger('id_cancha');
            $table->date('fecha_hora_uso');
            $table->string('observaciones');
            $table->unsignedInteger('id_usuario');
            $table->date('fecha_registro');
            $table->timestamps();
            $table->foreign('id_cancha')->references('id')->on('canchas');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
