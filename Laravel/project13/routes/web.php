<?php

use App\Http\Controllers\databaseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/getdata", [databaseController::class, "getData"]);
Route::get("/joindata", [databaseController::class, "joinData"]);
