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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->unsignedInteger('id_rol');
            $table->string('usuario')->unique();
            $table->string('contrasena',200)->change();
            $table->unsignedInteger('id_alcaldia');
            $table->unsignedInteger('dui');
            $table->timestamps();
            $table->foreign('id_rol')->references('id')->on('roles');
            $table->foreign('id_alcaldia')->references('id')->on('alcaldias');
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
