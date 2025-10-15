<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('contact', 'contact')->name('contact');

Route::resource('blog', PostController::class)
    ->names('posts')
    ->parameters(['blog' => 'post'])  ;

Route::view('nosotros', 'about')->name('about');




