<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/User_Profile', function () {
    return view('pages.userProfile');
})->name('userProfile');
