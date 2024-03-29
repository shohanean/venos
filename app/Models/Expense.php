<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    function user(){
        return $this->hasOne(User::class, 'id', 'added_by');
    }
    function store(){
        return $this->hasOne(Store::class, 'id', 'store_warehouse_id');
    }
    function warehouse(){
        return $this->hasOne(Warehouse::class, 'id', 'store_warehouse_id');
    }
    function expense_category(){
        return $this->hasOne(Expense_category::class, 'id', 'expense_category_id');
    }
}
