<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'items';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'item_name', 'item_desc', 'item_img', 'start_bid', 'buy_now_price', 'last_bid', 'status', 'start_date', 'max_date', 'seller'];

}
