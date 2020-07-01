<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
       //relacion $productimage->product
    public function product(){
        return $this->belongsto(Product::class);
    
        }
}
