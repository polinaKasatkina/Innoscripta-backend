<?php

namespace App\Models;


class Category extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class, 'category_id', 'id');
    }

}
