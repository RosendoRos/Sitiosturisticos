<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('sitio', function (Blueprint $table) {
            $table->id();
            $table->string("nombre");
            $table->string("telefono");
            $table->unsignedBigInteger('id_categoria');
            $table->timestamps();

            $table->foreign('id_categoria')->references('id')->on('categoria');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sitio');
    }
};
