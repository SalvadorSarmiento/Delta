<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bienvenidos');
});

Route::get('/informacion', function () {
    return view('informacion');
});

Route::get('/js', function () {
    return 'Página en construcción para JavaScript';
})->name('js_page');

Route::get('/python', function () {
    return 'Página en construcción para Python';
})->name('python_page');

Route::get('/sql', function () {
    return 'Página en construcción para SQL';
})->name('sql_page');

Route::get('/java', function () {
    return 'Página en construcción para Java';
})->name('java_page');

Route::get('/tp', function () {
    return 'Página en construcción para Tecnologías de Programación';
})->name('tp_page');
