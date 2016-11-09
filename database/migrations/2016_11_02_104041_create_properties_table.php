<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('parent_id');
            $table->string('type');
            $table->string('property_type');
            $table->integer('price');
            $table->string('short_description');
            $table->longText('long_description');
            $table->string('province');
            $table->string('city');
            $table->string('address');
            $table->integer('housenumber');
            $table->string('zipcode');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('outside_size');
            $table->string('inside_size');
            $table->boolean('sold');
            $table->boolean('spotlight');
            $table->string('owner_id');
            $table->string('document_id');
            $table->string('photo_album_id');
            $table->string('makelaar_id');
            $table->timestamps();
            $table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
