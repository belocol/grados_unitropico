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
        Schema::create('programas_academicos', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Programa',255);
            $table->string('Nombre_Resolucion',45);
            $table->string('Titulo',45);
            $table->integer('Codigo_Snies');
            $table->string('Nombre_Corto',45)->nullable();
            $table->timestamps();

            $table->foreignId('Nivel_Estudio_id')
            ->nullable()
            ->constrained('niveles_de_estudios')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('facultad_id')
            ->nullable()
            ->constrained('facultades')
            ->cascadeOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programas_academicos');
    }
};
