<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = [
        'title', 'slug', 'note', 'order_sort', 'status'
    ];

    public $timestamps = true;


    public function categoryparent()
    {
    	return $this->belongsToMany('App\Category', 'category_child', 'parent_id', 'child_id')->where('level',2);
    }

        public function categorychild()
    {
    	return $this->belongsToMany('App\Category', 'category_child', 'parent_id', 'child_id')->where('level',3);
    }
}
