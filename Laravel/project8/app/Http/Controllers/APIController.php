<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class APIController extends Controller
{
    //
    public function getAllProducts(){
        $APIURL = "https://dummyjson.com/products";
        $productsData = Http::get($APIURL);

        //return $productsData;
        return view("products", ["products" => $productsData["products"]]);
    }
}
