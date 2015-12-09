<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
            Schema::create('items', function(Blueprint $table) {
                $table->increments('item_id');
                $table->string('item_name');
                $table->text('item_desc');
                $table->binary('item_img');
                $table->bigInteger('start_bid');
                $table->bigInteger('buy_now_price');
                $table->bigInteger('last_bid');
                $table->string('status');
                $table->date('start_date');
                $table->date('max_date');
                $table->string('seller');

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
        Schema::drop('items');
    }

}
