<?php

namespace App\Http\Controllers;

use App\product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome()
    {
     
        $products = Product::paginate(9);
        return view('welcome')->with(compact('products'));


    }
}
