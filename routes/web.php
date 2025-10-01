<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('contacto', 'contact');
Route::view('blog', 'blog');
Route::view('nosotros', 'about');

//Uso del metodo Match para responder a multiples verbos HTTP

Route::match(['put', 'patch'], 'match', function () {
    return 'Hola desde la ruta match';
});

    Route::any('any', function () {
        //
});

