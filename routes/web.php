<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ControllerCoba;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [ControllerCoba::class, 'index']);
