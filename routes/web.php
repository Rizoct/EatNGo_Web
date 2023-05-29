<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/home', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/restaurants', function () {
    return view('restaurants', [
        "title" => "Restaurants"
    ]);
});

Route::get('/menu', function () {
    return view('menu', [
        "title" => "Menu Sushi"
    ]);
});
