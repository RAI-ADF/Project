<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presences', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('nim_participant');
            $table->string('nim_tutor');
            $table->unsignedInteger('id_activity');
            $table->unsignedInteger('shift');
            $table->foreign('nim_participant')->references('nim')->on('participants')->onDelete('CASCADE');
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
        Schema::drop('presences');
    }
}
