<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trip_cities_hidden_gem_hashtags', function (Blueprint $table) {
            $table->id();
            $table->integer('trip_categories_id');
            $table->integer('place_categories_cities_id');
            $table->integer('hidden_gem_id');
            $table->integer('hashtag_id');
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
        Schema::dropIfExists('trip_cities_hidden_gem_hashtags');
    }
};
