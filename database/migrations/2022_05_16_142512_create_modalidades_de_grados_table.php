<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     
     * @return void
     */
    public function up()
    {
        Schema::create('modalidades_de_grados', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre_Modalidad_De_Grado',45);
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
        Schema::dropIfExists('modalidades_de_grados');
    }
};
