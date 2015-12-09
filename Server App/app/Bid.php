<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'bids';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'item_id', 'buyer', 'current_bid', 'bid_date'];

}
