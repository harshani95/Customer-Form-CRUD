<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

//customers is the function name
Route::get('/api/v1/customers', [CustomerController::class, 'customers']) -> name('customers.customer');
Route::get('/api/v1/customers', [CustomerController::class, 'newCustomers']) -> name('customers.new-customer');
