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
        Schema::table('users', function (Blueprint $table) {

            $table->foreignId('egresado_usuario_id')
            ->nullable()
            ->constrained('egresados')
            ->cascadeOnUpdate()
            ->nullOnDelete();

            $table->foreignId('Dependencia_id')
            ->nullable()
            ->constrained('dependencias')
            ->cascadeOnUpdate()
            ->nullOnDelete(); 

            $table->foreignId('tipo_usuario_id')
            ->nullable()
            ->constrained('tipos_usuarios')
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('egresado_usuario_id');
            $table->dropForeign('Dependencia_id');
            $table->dropForeign('tipo_usuario_id');
        });
    }
};
