<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'user_id',
        'category_id',
        'name',
        'price_per_box',
        'product_per_box',
        'stock_box',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
