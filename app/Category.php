<?php

namespace App;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'slug','title','des','thumbnail','excerpt','gallery','parent',
     ];
 
     protected $dates = [
         'created_at',
         'updated_at',
     ];
 
     public function products()
     {
        return $this->hasMany(Product::class);
     }
}
