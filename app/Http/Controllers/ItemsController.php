<?php

namespace App\Http\Controllers;

use App\Models\Items;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
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

        Items::create($createData);
        return  redirect('/items');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit',
            'item' => Items::find($id),
        ];

        return view('pages.items.edit', $data);
    } 


    // public function update(Request $request, $id) 
    // {
    //     $item = Items::find($id);

    //     $request->validate([
    //         'item_name' => 'required',
    //         'item_price_per_box' => 'required',
    //         'item_stock_box' => 'required', 
    //     ]);

    //     $item->update($request->all());

    //     return redirect("/items/detail/$id");
    // }
    // public function stats()
    // {
    //     $data = [
    //         'title' => 'Statistic',
    //     ]; 
    //     return view('contents.stats', $data);
    // }

    // public function data()
    // {
    //     $data = [
    //         'title' => 'Data Table',
    //     ];
    //     return view('contents.data', $data);
    // }
}
