<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_de_grados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('Nombres_completos',150);
            $table->string('Correo_institucional',150);
            $table->string('Celular',150);
            $table->string('Direccion',150);
            $table->string('Programa_academico',150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes_de_grados');
    }
};
