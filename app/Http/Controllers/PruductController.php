<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruductController extends Controller

{
   public function list(){
    return view('backend.product.product_list');
   }
}
