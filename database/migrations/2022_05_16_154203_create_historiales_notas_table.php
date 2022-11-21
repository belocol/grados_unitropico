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
        Schema::create('historiales_notas', function (Blueprint $table) {
            $table->id();
            $table->timestamp('Fecha_Envio');
            $table->timestamp('Fecha_Revision')->nullable();

            $table->timestamps();

            $table->foreignId('notificacion_id')
            ->nullable()
            ->constrained('notificaciones')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('egresado_historialN_id')
            ->nullable()
            ->constrained('egresados')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('user_historialN_id')
            ->nullable()
            ->constrained('users')
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
        Schema::dropIfExists('historiales_notas');
    }
};
