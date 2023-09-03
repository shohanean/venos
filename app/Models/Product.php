<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    function inventory()
    {
        return $this->hasMany(Inventory::class, 'product_id', 'id');
    }
    function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }
    function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    function unit()
    {
        return $this->hasOne(Unit::class, 'id', 'unit_id');
    }
}
