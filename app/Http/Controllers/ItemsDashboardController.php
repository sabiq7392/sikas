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
            'price' => 'required',
            'value' => 'required',
        ]);

        $validatedData["user_id"] = session('id');
        $validatedData["box_id"] = $request->box_id;

        Item::create($validatedData);
        return redirect('/boxes/' . $request->box_id)->with('successCreate', 'Berhasil Tambah Item');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Items  $items
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
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
            'price' => 'required',
            'value' => 'required',
        ]);
        $item->update($validatedData);
        return redirect("/items/$item->id/edit")->with('success', 'Item Berhasil Diupdate');
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
        return redirect("/boxes/" . $item->box_id)->with('successDelete', 'Item Berhasil Dihapus');
    }
}
