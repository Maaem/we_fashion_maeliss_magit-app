<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'state', 'category_id', 'price'];

    public function sizes()
    {
        return $this->belongsToMany(Size::class, 'product_size');
    }
    

    // public function category(): HasOne
    // {
    //     return $this->hasOne(Category::class);
    // }
}
