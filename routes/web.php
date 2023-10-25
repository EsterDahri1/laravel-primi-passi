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
    $message = 'Hello World - Laravel 10';
    return view('home', compact('message'));
});

Route::get('/about', function () {
    $message = 'about';
    return view('about', compact('message'));
});

Route::get('/contacts', function () {
    $message = 'contacts';
    return view('contacts', compact('message'));
});
