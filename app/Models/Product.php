<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'quantity',
        'price',
        'is_active',
    ];

    public function category(){
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
