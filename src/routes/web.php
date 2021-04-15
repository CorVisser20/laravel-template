<?php

use Illuminate\Support\Facades\Route;

// ================================================== //
// Regular Routes
// ================================================== //

// Home Route //
Route::get('/', function() {
    return view('laravel-template::pages.master.home.index');
});

Route::get('/inloggen', function() {
    return view('laravel-template::pages.auth.login.index');
});
