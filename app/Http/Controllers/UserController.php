<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function doRegistration(Request $request){
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email, 
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back();
    }

    public function login(Request $request){
        // dd($request);
        $check = Auth::attempt([
            'email' => $request->email, 
            'password' => $request->password,
        ]);
        dd($check);
        return redirect()->back();
    }

    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
