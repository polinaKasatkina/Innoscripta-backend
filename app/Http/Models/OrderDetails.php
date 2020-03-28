<?php

namespace App\Models;

use App\Models\User;

class OrderDetails extends Model
{

    protected $table = 'order_details';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id', 'product_id', 'quantity'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'id', 'order_id');
    }

}
