<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMascotasPerdidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mascotas_perdidas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_mascota');
            $table->string('descripcion');
            $table->string('raza')->nullable();
            $table->string('color');
            $table->string('estado');
            $table->integer('tamanio');
            $table->string('tipo');
            $table->string('imagen_mascota');
            $table->string('especie');
            $table->bigInteger('id_user');

            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mascotas_perdidas');
    }
}
