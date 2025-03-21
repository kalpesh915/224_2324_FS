<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    public function getRequestData(Request $request){
        return $request->input();
    }

    public function postRequestData(Request $request){
        //return $request->input();
        return $request->input("lname");
    }
}
