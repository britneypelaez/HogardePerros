<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciosPrestadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios_prestados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_servicio');
            $table->string('nombre_cliente');
            $table->bigInteger('id_cliente');
            $table->date('fecha');
            $table->string('descripcion')->nullable();
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
        Schema::dropIfExists('servicios_prestados');
    }
}
