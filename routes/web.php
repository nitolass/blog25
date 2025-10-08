<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('contact', 'contact')->name('contact');
    Route::get('blog', function(){
        $posts = [
            ['title' => 'Post 1'],
            ['title' => 'Post 2'],
            ['title' => 'Post 3'],
            ['title' => 'Post 4'],

        ];
        return view('blog', compact('posts'));
    })->name('blog');
Route::view('nosotros', 'about')->name('about');



