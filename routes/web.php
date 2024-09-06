<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\users;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [users::class, 'index']);
