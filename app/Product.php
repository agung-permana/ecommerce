<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function pesanan_details()
    {
        return $this->hasMany(Pesanan::class, 'product_id', 'id');
    }
}
