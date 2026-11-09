<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;

// 1. Static Pages (Must always be at the top)
Route::get('/', [PageController::class, 'welcome']);
Route::get('/about', [PageController::class, 'about']);

// 2. Creation Form Routes (Must be ABOVE dynamic edit/show routes)
Route::get('/customers/create', [CustomerController::class, 'create']);
Route::post('/customers', [CustomerController::class, 'store']);
Route::get('/users/create', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);

// 3. Index/Listing Pages
Route::get('/customers', [CustomerController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);

// 4. Dynamic Parameter Routes (Must be at the bottom)
Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit']);
Route::put('/customers/{customer}', [CustomerController::class, 'update']);
Route::get('/users/{user}/edit', [UserController::class, 'edit']);
Route::put('/users/{user}', [UserController::class, 'update']);