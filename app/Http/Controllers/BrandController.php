<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
  public function add(){
    return view('backend.brand.brand_add');
  }


  public function list(){
    $brands = Brand::all();
    return view ('backend.brand.brand_list',compact('brands'));
  }

  public function store(Request $request){
    Brand::Create([

        'name' =>$request->name,
        'description' =>$request->description,
        'photo' =>$request->photo, 
    ]);
    return redirect()->route('list.brand');

}
}

