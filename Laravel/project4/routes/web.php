<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/products', function () {
    return view('pages.products');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
