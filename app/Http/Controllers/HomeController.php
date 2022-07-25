<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::all();
        $products = Product::all();

        return view('frontend.layouts.home',compact('categories','products'));
    }
}
