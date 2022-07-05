<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function list(){
        return view('backend.category.category_list');
    }

   
    public function add()
    {
        return view('backend.category.category_add');
    }
}
