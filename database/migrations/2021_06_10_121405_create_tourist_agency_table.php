<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTouristAgencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tourist_agency', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->smallInteger('price')-> unsigned();
            $table->string('description')->nullable();
            $table->string('type', 50);
            $table->string('places');
            $table->boolean('Is_avaiable')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tourist_agency');
    }
}
