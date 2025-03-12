<?php

use App\Http\Controllers\sampleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about/{user}', function ($user) {
    //return view('about');
    // pass user dynamic data to about view file
    return view('about', ["user" => $user]);
});

Route::get('/services/{fname?}/{lname?}', function ($fname = "", $lname = "Rajkot") {
    return view('services', ["fname" => $fname, "lname" => $lname]);
});

Route::get('/products/{id?}', function ($id=0) {
    return view('products', ["id" => $id]);
})->whereAlphaNumeric("id");

Route::get('/contact', function () {
    //return view('contact');

    return redirect("/");
});

//Route::get("/sample", [sampleController::class, "index"]);
Route::get("/sample", [sampleController::class, "students"]);

//Route::get("/sample", ["sampleController@students"]);
Route::get("/greet/{fname?}/{lname?}", [sampleController::class,"greetings"]);
