<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;

class ItemsDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'Items',
            'items' => Item::All(),
        ];

        return view('pages.items.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'title' => 'Items',
            'categories' => Category::all(),
        ];

        return view('pages.items.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'stock_box' => 'required',
            'price_per_box' => 'required',
        ]);

        Item::create($validatedData);
        return redirect('/items')->with('success', 'Berhasil Tambah Item');

        // if ($validator->fails()) {
        //     echo 'gagal';
        // } else {
        //     Item::create($this->dataFromInput($request));
        //     return redirect('/items');
        // }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        $data = [
            'title' => 'Items',
            'item' => $item,
        ];

        return view('pages.items.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        $data = [
            'title' => 'Items',
            'item' => $item,
            'categories' => Category::all(),
        ];

        return view('pages.items.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'price_per_box' => 'required',
            'stock_box' => 'required',
        ]);
        $item->update($validatedData);
        return redirect("/items/$item->id")->with('success', 'Item Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        Item::destroy('id', $item->id);
        return redirect("/items")->with('success', 'Item Berhasil Dihapus');
    }

    // private function dataFromInput($request)
    // {
    //     return [
    //         'name' => $request->item_name,
    //         'category_id' => $request->item_category,
    //         'price_per_box' => $request->item_price_per_box,
    //         'stock_box' => $request->item_stock_box,
    //     ];
    // }
}
