<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifica', function (Blueprint $table) {
            $table->bigInteger('id_fundacion')->unsigned();
            $table->bigInteger('id_user')->unsigned();

            $table->foreign('id_fundacion')->references('id')->on('fundaciones');
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
        Schema::dropIfExists('certifica');
    }
}
