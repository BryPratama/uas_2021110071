<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Rute utama
Route::get('/', [Controller::class, 'index'])->name('Home');
Route::get('/shop', [Controller::class, 'shop'])->name('Shop');
Route::get('/transaksi', [Controller::class, 'transaksi'])->name('Transaksi');
Route::get('/contact', [Controller::class, 'contact'])->name('Contact');
Route::get('/checkout', [Controller::class, 'checkout'])->name('Checkout');

// Rute grup untuk admin
Route::get('/admin', [Controller::class, 'admin'])->name('admin');
Route::get('/admin/dashboard', [Controller::class, 'admin'])->name('admin');
Route::get('/admin/product', [ProductController::class, 'index'])->name('product');
Route::get('/admin/user_management', [Controller::class, 'userManagement'])->name('userManagement');
Route::get('/admin/report', [Controller::class, 'report'])->name('report');
Route::get('/admin/addModal', [ProductController::class, 'addModal'])->name('addModal');

Route::POST('/admin/addData', [ProductController::class, 'store'])->name('addData');

