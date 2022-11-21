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
        Schema::create('egresados', function (Blueprint $table) {
            $table->id();
            $table->string('Codigo_Usuario',45);
            $table->string('Genero',45);
            $table->string('Fotografia',45);
            $table->string('Ley_Datos',45);
            $table->string('Nombre_Programa',255);
            $table->string('Codigo_Modalidad_Grado',45);
            $table->integer('Codigo_Residencia');







            $table->timestamps();

            $table->foreignId('Tipo_Documento_id')
            ->nullable()
            ->constrained('tipos_de_documentos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('Municipio_Egresado_id')
            ->nullable()
            ->constrained('municipios')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('Grado_id')
            ->nullable()
            ->constrained('tipos_grados')
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
        Schema::dropIfExists('egresados');
    }
};
