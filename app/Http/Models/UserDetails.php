<?php

namespace App\Models;

use App\Models\User;

class UserDetails extends Model
{

    protected $table = 'user_details';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'first_name', 'last_name', 'phone', 'address'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

}
