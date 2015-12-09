<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLapanganTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('lapangan', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('harga');
			$table->string('ketersediaan')->default('kosong');
			$table->integer('vendor_id')->unsigned()->nullable();
			$table->foreign('vendor_id')->references('id')->on('vendors')->onDelete('CASCADE');
			$table->integer('tipe_id')->unsigned()->nullable();
			$table->foreign('tipe_id')->references('id')->on('tipe_lap')->onDelete('CASCADE');
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
		Schema::drop('kost');
	}

}
