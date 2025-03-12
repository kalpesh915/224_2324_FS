<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get("/about", function(){
    return view("about");
});*/

/*Route::get("/services", function(){
    return view("services");
});*/

Route::view("/about", "about");
Route::view("/services", "services");