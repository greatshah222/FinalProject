<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','description','category_id','image','publisher'];
    public  function category()
    {
        $this->belongsTo(Category::class);
    }
}
