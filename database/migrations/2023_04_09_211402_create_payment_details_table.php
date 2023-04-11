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
        Schema::create('payment_details', function (Blueprint $table) {
            $table->id();
            $table->integer('installment_id');
            $table->integer('payment_id');
            $table->integer('amount');
            $table->date('due_date');
            $table->integer('price')->unsigned()->nullable();
            $table->integer('qty')->unsigned()->nullable();
            $table->unsignedBigInteger('total')->unsigned()->nullable();
            $table->date('payment_acc_date')->nullable();
            $table->string('status');
            $table->string('foto_diunggah')->nullable();
            $table->string('foto_diunggah_acc')->nullable();
            $table->integer('user_id');
            $table->integer('trip_categories_id');
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
        Schema::dropIfExists('payment_details');
    }
};