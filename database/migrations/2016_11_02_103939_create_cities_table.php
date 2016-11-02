<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('locid');
            $table->string('country', 20);
            $table->string('region', 20);
            $table->string('city', 100);
            $table->string('postalcode', 50);
            $table->string('latitude', 100);
            $table->string('longitude', 100);
            $table->integer('metroCode')->nullable();
            $table->integer('areaCode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cities');
    }
}
