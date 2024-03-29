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
    return view('pages.app.dashboard-siakad', ['type_menu' => '']);
});

Route::get('/register', function () {
    return view('pages.auth.register');
})->name('register');

Route::get('/login', function () {
    return view('pages.auth.login', ['type_menu' => 'auth']);
})->name('login');

Route::get('/forgot-password', function () {
    return view('pages.auth.forgot-password');
})->name('forgot-password');

Route::get('/reset-password', function () {
    return view('pages.auth.reset-password');
})->name('reset-password');
