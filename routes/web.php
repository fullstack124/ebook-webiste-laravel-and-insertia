<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return  Inertia::render('Home');
});
Route::get('/books', function () {
    return  Inertia::render('Book');
});
Route::get('/category', function () {
    return  Inertia::render('Category');
});
Route::get('/about', function () {
    return  Inertia::render('About');
});

Route::get('/contact', function () {
    return  Inertia::render('Contact');
});

Route::get('/login', function () {
    return  Inertia::render('Auth/Login');
});
