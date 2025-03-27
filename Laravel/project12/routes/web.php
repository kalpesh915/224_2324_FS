<?php

use App\Http\Controllers\studentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post("/addprocess", [studentController::class, "addProcess"]);
Route::get("/viewstudents", [studentController::class, "getAllStudents"]);
Route::get("/deletestudent/{id}", [studentController::class, "deleteStudent"]);
Route::get("/getstudent/{id}", [studentController::class, "getStudent"]);
Route::post("/updateprocess", [studentController::class, "updateProcess"]);