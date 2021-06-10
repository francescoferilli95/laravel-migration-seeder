<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateTouristAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tourist_agency', function (Blueprint $table) {
            $table->string('period_of_time', 30)->after('places');
            $table->string('season', 20)->after('places');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tourist_agency', function (Blueprint $table) {
            $table->dropColumn('period_of_time');
            $table->dropColumn('season');
        });
    }
}
