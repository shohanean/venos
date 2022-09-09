<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    function user(){
        return $this->hasOne(User::class, 'id', 'added_by');
    }
    function subcategory(){
        return $this->hasMany(Subcategory::class, 'category_id', 'id');
    }
}
