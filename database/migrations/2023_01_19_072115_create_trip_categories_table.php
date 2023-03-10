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
        Schema::create('trip_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('description');
            $table->text('itinerary');
            $table->unsignedBigInteger('price');
            $table->string('day');
            $table->string('night');
            $table->string('seat');
            $table->integer('place_id');
            $table->integer('place_region');
            $table->integer('trip_hidde_gem_id')->nullable();
            $table->date('date_from');
            $table->date('date_to');
            $table->string('status');
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
        Schema::dropIfExists('trip_categories');
    }
};
