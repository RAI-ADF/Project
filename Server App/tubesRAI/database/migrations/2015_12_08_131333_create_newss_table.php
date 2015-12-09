<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewssTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newss', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nik');
            $table->string('title');
            $table->text('content');
            $table->foreign('nik')->references('nik')->on('staffs')->onDelete('CASCADE');
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
        Schema::drop('newss');
    }
}
