<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kader_id')->unsigned();
            $table->timestamps();
            $table->string('kelas');
            $table->string('divisi');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');

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
        Schema::drop('biodatas');
    }
}
