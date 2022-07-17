<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class PruductController extends Controller

{
   public function list(){
      $products = Product::all();
    return view('backend.product.product_list', compact('products'));
   }

   public function add(){
    return view('backend.product.product_add');
   }

   public function store(Request $request){
      // dd($request);
      // dd($request->name);
      Product::create([
         // 'database column name' => $request->input field name
         'name' =>$request->name,
         // 'database column descripstion' => $request-> input field name
         'description' =>$request->description,
         // 'database column photo' => $request-> input field name
         'photo' =>$request->photo,
         // 'database column price' => $request-> input field name
         'price' =>$request->price,
         // 'database column quantity' => $request-> input field name
         'quantity' =>$request->qty,

      ]);
      return redirect()->route('list.product');
   }
}
