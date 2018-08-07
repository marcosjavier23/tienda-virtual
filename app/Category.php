<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable = [
        'category','subcate',
    ];

 
    public function products()
    {
        return $this->hasMany(Product::class);
    }
  

    public function scopeName($query, $category)
    {
        if ($category) {
            return $query->where('category', 'LIKE', "%$category%");
        }

    }

}
