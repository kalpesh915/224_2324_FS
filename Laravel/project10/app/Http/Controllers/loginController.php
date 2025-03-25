<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    //
    public function loginProcess(Request $request){
        if($request->input("email") == "admin@project.com" && $request->input("password") == "admin"){
            // create new login Session
            session()->put("username", $request->input("email"));
            return redirect("/home");
        }else{
            session()->flash("error", "Invalid Username or Password");
            return redirect("/");
        }
    }
}
