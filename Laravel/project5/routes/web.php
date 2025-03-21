<?php

use App\Http\Controllers\formController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/getprocess", [formController::class, "getRequestData"]);
Route::post("/postprocess", [formController::class, "postRequestData"]);
