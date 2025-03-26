<?php

use App\Http\Controllers\studentController;
use App\Http\Controllers\uploadController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/story/{lang?}", function($lang='en'){
    App::setLocale($lang);
    return view("story");
});

Route::get("/upload", function(){
    return view("upload");
});

Route::post("/uploadprocess", [uploadController::class, "uploadProcess"]);
Route::get("/getdata", [studentController::class, "getAllData"]);
Route::get("/pagedata", [studentController::class, "getPageData"]);