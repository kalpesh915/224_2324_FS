<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $username = "Bhavya Dava";
    $students = ["Bhavya", "Het", "Yash"];
    return view('about', ["username" => $username, "students" => $students]);
});

Route::get('/contact', function () {
    return view('contact');
});
