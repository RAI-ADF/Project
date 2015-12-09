<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrestasisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestasis', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kader_id')->unsigned();
            $table->string('jenis');
            $table->string('nama');
            $table->string('tingkat');
            $table->date('waktu');
            $table->string('tempat');
            $table->string('peringkat');
            $table->timestamps();

            $table->foreign('kader_id')->references('id')->on('kaders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prestasis');
    }
}
