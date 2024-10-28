<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome'); //merujuk kehalaman welcome.blade.php di folder resource/views
});

// Route::get('/index', function () {
//     return view('index'); //merujuk kehalaman welcome.blade.php di folder resource/views
// });

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/about', function () {
//     return view('about');
// });

route::get('/index', [HomeController::class, 'index'])-> name('index');
route::get('/login', [HomeController::class, 'login'])-> name('login');
route::get('/about', [HomeController::class, 'about'])-> name('about');