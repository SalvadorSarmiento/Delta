<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bienvenidos');
});

Route::get('/informacion', function () {
    return view('informacion');
});
