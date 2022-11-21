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
        Schema::create('documentos', function (Blueprint $table) {
            $table->id();
            $table->string('Directorio',45);
            $table->string('Observaciones',45)->nullable();
            $table->string('Aprobacion',2);
            $table->timestamp('Fecha_Carga');
            $table->timestamp('Fecha_Aprobacion')->nullable();


            $table->foreignId('InfoGrado_Documento_id')
            ->nullable()
            ->constrained('informaciones_graduaciones')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('user_documento_id')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documentos');
    }
};
