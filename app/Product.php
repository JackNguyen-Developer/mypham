<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
        'name', 'slug', 'info', 'description', 'status', 'thumbnails', 'price', 'brand_id'
    ];
}
