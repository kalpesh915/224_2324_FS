<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadController extends Controller
{
    //
    public function uploadProcess(Request $request){
        //echo "OK";
        //return $request->file("file1")->store();
        return $request->file("file1")->storeAs("images", $request->file("file1")->getClientOriginalName());
    }
}
