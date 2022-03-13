<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Diet;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function homepage()
    {
        $products = Product::all();

        $loseweight = Diet::where('id', '1')->value('filepath');
        $keepweight = Diet::where('id', '2')->value('filepath');
        $gainweight = Diet::where('id', '3')->value('filepath');

        return view('index', compact(['products','loseweight','keepweight','gainweight']));
    }
}
