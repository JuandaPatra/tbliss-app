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
        Schema::create('pick_hidden_gems', function (Blueprint $table) {
            $table->id();
            $table->integer('place_categories_id');
            $table->integer('place_categories_categories_cities_id');
            $table->integer('hidden_gem_id');
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
        Schema::dropIfExists('pick_hidden_gems');
    }
};
