<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFeaturesToRaza extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('raza', function (Blueprint $table) {
            $table->bigInteger('especie')->nullable();
            $table->foreign('especie')->references('especie')->on('especie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('raza', function (Blueprint $table) {
            //
        });
    }
}
