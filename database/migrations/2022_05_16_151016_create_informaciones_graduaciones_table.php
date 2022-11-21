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
        Schema::create('informaciones_graduaciones', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo',45);
            $table->string('Numero_Registro_Examen',45);
            $table->string('Periodo_Ingreso',7);
            $table->string('Periodo_Egreso',7);
            $table->string('Acta_Grado',10);
            $table->string('Periodo_Grado',7);
            $table->integer('Diploma');
            $table->text('Proyecto')->nullable();
            $table->timestamp('Fecha_sustentacion')->nullable();
            $table->timestamp('Fecha_Grado')->nullable();

            $table->timestamps();

            $table->foreignId('Egresado_Info_Grado_id')
            ->nullable()
            ->constrained('egresados')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('Programa_Academico_id')
            ->nullable()
            ->constrained('programas_academicos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('Modalidad_Grado_id')
            ->nullable()
            ->constrained('modalidades_de_grados')
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
        Schema::dropIfExists('informaciones_graduaciones');
    }
};
