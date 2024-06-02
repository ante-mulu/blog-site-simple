<?php

use App\Http\Controllers\HomeController;
use \App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// // Route::get('/second', function(){
// //     return view('second');
// // });
// Route::view('/second', 'second');
Route::get('/', [HomeController::class,'index'])->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::get('posts/{post}', [PostController::class, 'show'])->name('post.show');
