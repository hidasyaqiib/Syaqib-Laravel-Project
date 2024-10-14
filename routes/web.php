<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); //merujuk kehalaman welcome.blade.php di folder resource/views
});

Route::get('/index', function () {
    return view('index'); //merujuk kehalaman welcome.blade.php di folder resource/views
});

Route::get('/login', function () {
    return view('login');
});