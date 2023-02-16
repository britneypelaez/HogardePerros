<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota');
            $table->string('descripcion');
            $table->string('raza');
            $table->string('color');
            $table->string('estado');
            $table->integer('tamanio');
            $table->integer('edad');
            $table->string('imagen_mascota');
            $table->bigInteger('id_fundacion');

            $table->foreign('id_fundacion')->references('id')->on('fundaciones');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas');
    }
}
