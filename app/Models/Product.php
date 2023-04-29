<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description', 'state', 'category_id', 'price'];

    public function size(): BelongsToMany 
    {
        return $this->belongsToMany(Size::class);
    }

    // public function category(): HasOne
    // {
    //     return $this->hasOne(Category::class);
    // }
}
