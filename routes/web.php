<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\lat1Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lat1', [lat1Controller::class, 'index']);
Route::get('/lat1/m2', [lat1Controller::class, 'method2']);