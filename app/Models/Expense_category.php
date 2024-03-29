<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Expense_category extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    function user()
    {
        return $this->hasOne(User::class, 'id', 'added_by');
    }
    function expense()
    {
        return $this->hasMany(Expense::class, 'expense_category_id', 'id');
    }
}
