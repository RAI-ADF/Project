<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSewaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sewa', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('status', array('cancelled', 'collected', 'complete', 'confirmed', 'pending'))->default('pending');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->float('total_bayar');
            $table->string('extras');
            $table->integer('lap_id')->unsigned()->nullable();
            $table->foreign('lap_id')->references('id')->on('lapangan')->onDelete('CASCADE');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('CASCADE');
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
        Schema::drop('sewa');
    }
}
