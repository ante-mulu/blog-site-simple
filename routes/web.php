<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// // Route::get('/second', function(){
// //     return view('second');
// // });
// Route::view('/second', 'second');
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
