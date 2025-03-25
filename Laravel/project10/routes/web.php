<?php

use App\Http\Controllers\loginController;
use Illuminate\Support\Facades\Route;

Route::post("/loginprocess", [loginController::class, "loginProcess"]);

Route::view('/', 'login');
Route::group(["middleware" => "loginMiddleware"], function(){
    Route::view('/home', 'pages.home');
    Route::view('/about', 'pages.about');
    Route::view('/services', 'pages.services');
    Route::view('/products', 'pages.products');
    Route::view('/contact', 'pages.contact');
    
});

Route::get("/logout", function(){
    if(session("username")){
        session()->pull("username");
        session()->flash("success", "Logout Successfully");
    }else{
        session()->flash("error", "Invalid Logout Attempt");
    }
    return redirect("/");
});