<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class ChangeTypecolumnToMascotasPerdidas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('mascotas_perdidas', function (Blueprint $table) {
            DB::statement("ALTER TABLE mascotas_perdidas ALTER COLUMN especie SET DATA TYPE BIGINT USING especie::bigint");
            DB::statement("ALTER TABLE mascotas_perdidas ALTER COLUMN raza SET DATA TYPE BIGINT USING raza::bigint");
            DB::statement("ALTER TABLE mascotas_perdidas ALTER COLUMN color SET DATA TYPE BIGINT USING color::bigint");
            DB::statement("ALTER TABLE mascotas_perdidas ALTER COLUMN estado SET DATA TYPE BIGINT USING estado::bigint");
            DB::statement("ALTER TABLE mascotas_perdidas DROP COLUMN tipo");
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
