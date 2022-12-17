<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ChangeTypecolumnToMascotas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mascotas', function (Blueprint $table) {
            DB::statement("ALTER TABLE mascotas ALTER COLUMN raza SET DATA TYPE BIGINT USING raza::bigint");
            DB::statement("ALTER TABLE mascotas ALTER COLUMN color SET DATA TYPE BIGINT USING color::bigint");
            DB::statement("ALTER TABLE mascotas ALTER COLUMN estado SET DATA TYPE BIGINT USING estado::bigint");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mascotas', function (Blueprint $table) {
            //
        });
    }
}
