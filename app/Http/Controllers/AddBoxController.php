<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddBoxController extends Controller
{
    public function index(Request $request)
    {

        $kategoriName = \App\Models\Category::where('id', $request->category_id)->first();

        $view = view(
            'pages.boxes.kolomKanan',
            [
                "name" => $request->name,
                "category_id" => $request->category_id,
                "kategoriName" => $kategoriName->name,
                "price" => $request->price,
                "value" => $request->value,
            ]
        )->render();
        echo $view;
    }
}
