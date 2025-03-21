<?php

use App\Http\Middleware\logoutMiddleware;
use Illuminate\Support\Facades\Route;

Route::view('/', "welcome")->middleware(logoutMiddleware::class);
Route::group(["middleware" => "welcome"],  function(){
    Route::view('/about', "about");
    Route::view('/services', "services");
    Route::view('/products', "products");
    Route::view('/contact', "contact");
    Route::view('/clients', "client");
});
Route::view('/login', "login");

