<?php

namespace App\Models;

use App\Models\User;

class Order extends Model
{

    protected $table = 'order';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id'
    ];

    public function products()
    {
        return $this->hasMany(OrderDetails::class, 'order_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

}
