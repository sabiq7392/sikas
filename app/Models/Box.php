<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Box extends Model
{
    use HasFactory;

    public $incrementing = false;
    protected $fillable = [
        'id',
        'status',
        'sender',
        'receiver',
        'address',
        'telepon',
    ];


    public function item()
    {
        return $this->hasMany(Item::class);
    }
}
