<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //relacion $category->products

    public function products()
    {
        return $this->hasMany(Product::class);
    }

}
