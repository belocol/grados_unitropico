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
        Schema::create('aprobaciones_procesos', function (Blueprint $table) {
            $table->id();
            $table->string('aprobacion',2);
            $table->timestamp('Fecha_Aprobacion');


            $table->timestamps();

            $table->foreignId('user_aprobacion_pro_id')
            ->nullable()
            ->constrained('users')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('proceso_id')
            ->nullable()
            ->constrained('procesos')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('Info_Grados_Apro_id')
            ->nullable()
            ->constrained('informaciones_graduaciones')
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
        Schema::dropIfExists('aprobaciones_procesos');
    }
};
