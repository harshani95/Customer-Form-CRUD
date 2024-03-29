<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//customers is the function name
Route::get('/api/v1/customers', [CustomerController::class, 'customers']) -> name('');
