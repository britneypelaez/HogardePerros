<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampaniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campanias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_campania');
            $table->string('descripcion');
            $table->bigInteger('meta_donaciones');
            $table->bigInteger('actual_donado')->nullable();
            $table->string('imagen_campania')->nullable();
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
        Schema::dropIfExists('campanias');
    }
}
