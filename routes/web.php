<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

Route::get('/', function () {
    return view('Bienvenidos');
});
Route::get('/informacion', function () {
    return view('Informacion'); 
});
