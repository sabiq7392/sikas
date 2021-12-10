<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function stats()
    {
        $data = [
            'title' => 'Statistic',
        ]; 
        return view('contents.stats', $data);
    }

    public function data()
    {
        $data = [
            'title' => 'Data Table',
        ];
        return view('contents.data', $data);
    }
}
