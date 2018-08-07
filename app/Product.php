<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'code', 'name', 'stock', 'precio', 'category_id',  'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
  

    public function users()
    {
        return $this->belongsTo(User::class);
    }

   

}
