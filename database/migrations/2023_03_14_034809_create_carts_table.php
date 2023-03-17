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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->integer('trip_categories_id')->unsigned()->nullable();
            $table->integer('qty')->unsigned()->nullable();
            $table->integer('price')->unsigned()->nullable();
            $table->integer('price_dp')->unsigned()->nullable();
            $table->unsignedBigInteger('total')->unsigned()->nullable();
            $table->date('tanggal_pembayaran');
            $table->string('foto_diunggah')->nullable();
            $table->date('tanggal_foto_diunggah')->nullable();
            $table->date('tanggal_pembayaran_acc')->nullable();
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
        Schema::dropIfExists('carts');
    }
};
