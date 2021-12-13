<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Items extends Model
{
	use HasFactory;

	protected $fillable = [
		'name',
		'category_id',
		'price_per_box',
		'stock_box',
	];

	// public function getAllJoinedTable()
	// {
	// 	return $this->joinCategories()->get();
	// }

	public function findById($id)
	{
		// return $this->joinCategories()
		// 	->where('items.id', $id)
		// 	->first();

		return Items::where('id', $id)->first();
	}

	// private function joinCategories() 
	// {
	// 	return DB::table('items')
	// 					->select('items.id', 'items.name', 'categories.name as category', 'items.price_per_box', 'items.stock_box')
	// 					->join('categories', 'categories.id', '=', 'items.category_id');
	// }

	public function categories()
	{
		return $this->belongsTo(Categories::class);
	}
}
