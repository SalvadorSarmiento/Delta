<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Bienvenidos');
});
Route::get('/informacion', function () {
    return view('Informacion'); 
});
