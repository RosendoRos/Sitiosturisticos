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
        Schema::create('direccion', function (Blueprint $table) {
            $table->id(); // Clave primaria
            $table->string('Calle');
            $table->string('Numero');
            $table->string('Colonia');
            $table->unsignedBigInteger('id_municipio'); // Clave foránea
            $table->unsignedBigInteger('id_estado'); // Clave foránea
            $table->unsignedBigInteger('id_sitio'); // Clave foránea

            // Definición de las relaciones de clave foránea
            $table->foreign('id_municipio')->references('id')->on('municipio');
            $table->foreign('id_estado')->references('id')->on('estado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion');
    }
};
