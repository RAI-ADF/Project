<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
         Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('question', 255);
            $table->string('option1', 255);
            $table->string('option2', 255);
            $table->string('option3', 255);
            $table->string('option4', 255);
            $table->string('slug')->nullable();
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
        //
        Schema::drop('questions');
    }
}
