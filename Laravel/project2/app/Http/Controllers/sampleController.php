<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sampleController extends Controller
{
    //
    public function index(){
        return "Welcome to my Controller";
    }

    public function students(){
        return response([
            "roll" => 1,
            "fname" => "Het",
            "lname" => "Manani",
            "city" => "Rajkot"
        ], 200);
    }

    public function greetings($fname = "Bhavya", $lname = "Dava"){
        return "Welcome $fname $lname";
    }
}
