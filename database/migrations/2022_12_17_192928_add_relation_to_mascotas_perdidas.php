<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationToMascotasPerdidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mascotas_perdidas', function (Blueprint $table) {
            $table->foreign('especie')->references('especie')->on('especie');
            $table->foreign('raza')->references('raza')->on('raza');
            $table->foreign('color')->references('color')->on('color');
            $table->foreign('estado')->references('estado')->on('estado');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mascotas_perdidas', function (Blueprint $table) {
            //
        });
    }
}
