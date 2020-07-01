<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //relacion $product->category

    public function category(){
    return $this->belongsTo(Category::class);

    }
    
    //relacion $product->image
    public function images(){
        return $this->hasMany(ProductImage::class);
    
        }
}
