<?php

namespace App\Models;


class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'description', 'price'
    ];

    public function category()
    {
        return $this->hasOne(Category::class);
    }

}
