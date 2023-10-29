<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sitio_categoria', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_sitio');
            $table->unsignedBigInteger('id_categoria1');
            $table->timestamps();

            $table->foreign('id_sitio')->references('id')->on('sitio');
            $table->foreign('id_categoria1')->references('id')->on('categoria');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sitio_categoria');
    }
};