<?php

use Illuminate\Support\Facades\Route;

// Home route
Route::get('/', function () {
    return view('home');
})->name('home');

// Other page routes
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/education', function () {
    return view('education');
})->name('education');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Article routes
Route::get('/article/{id}', function ($id) {
    return view('article');
})->name('article');
