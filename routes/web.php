<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;


// ====================
// User Routes
// ====================

Route::get('/', [UserController::class, 'Home']);

Route::get('/products', [UserController::class, 'Product']);

Route::get('/order', [UserController::class, 'Order']);

Route::get('/checkout', [UserController::class, 'Checkouts']);

Route::get('/carts', [UserController::class, 'Carts']);


// ====================
// Authentication Routes
// ====================

Route::get('/login', [AuthController::class, 'Login']);

Route::get('/register', [AuthController::class, 'Register']);


// ====================
// Admin Routes
// ====================

Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);

Route::get('/admin/orders', [AdminController::class, 'orders']);

Route::get('/admin/products', [AdminController::class, 'index']);

Route::get('/admin/products/create', [AdminController::class, 'create']);

Route::get('/admin/products/read', [AdminController::class, 'read']);

Route::get('/admin/products/edit', [AdminController::class, 'edit']);

Route::get('/admin/products/update', [AdminController::class, 'update']);

Route::get('/admin/products/show', [AdminController::class, 'show']);