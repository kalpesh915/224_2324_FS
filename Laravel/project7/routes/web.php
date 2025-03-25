<?php

use App\Http\Controllers\databaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/getalldata", [databaseController::class, "getAllData"]);
