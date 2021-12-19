<?php

namespace App\Models;

use Categories;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'price_per_box',
        'stock_box',
    ];

    public function findById($id)
    {
        return Items::where('id', $id)->first();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
