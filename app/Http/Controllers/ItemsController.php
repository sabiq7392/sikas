<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Items;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ItemsController extends Controller
{
	public function __construct()
	{
		$this->itemsModel = new Items();
	}

	public function index() 
	{
		$data = [
			'title' => 'Show All Items',
			'items' => Items::All(),
		];

		return view('pages.items.index', $data);
	}

	public function show($id) 
	{
		$data = [
			'title' => 'Detail',
			'item' => Items::find($id),
		];

		return view('pages.items.show', $data);
	}

	public function create()
	{
		$data = [
			'title' => 'Create Items',
			'categories' => Categories::all(), 
		];

		return view('pages.items.create', $data);
	}

	public function store(Request $request)
	{
		$createData = [ 
			'name' => $request->item_name,
			'category_id' => $request->item_category,
			'price_per_box' => $request->item_price_per_box,
			'stock_box' => $request->item_stock_box,
		];

		$rules = [
			'name' => 'required',
			'category_id' => 'required',
			'price_per_box' => 'required',
			'stock_box' => 'required',
		];

		$validator = Validator::make($createData, $rules);

		if ($validator->fails()) {
			echo 'gagal';
		} else {
			Items::create($createData);
			return redirect('/items');
		}
	}

	public function edit($id)
	{
		$data = [
			'title' => 'Edit',
			'item' => $this->itemsModel->findById($id),
			'categories' => Categories::all(),		
		];

		return view('pages.items.edit', $data);
	} 

	public function update(Request $request, $id) 
	{
		$createData = [ 
			'name' => $request->item_name,
			'category_id' => $request->item_category,
			'price_per_box' => $request->item_price_per_box,
			'stock_box' => $request->item_stock_box,
		];

		$item = Items::find($id);

		$item->update($createData);

		return redirect("/items/detail/$id");
	}
}
