<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExpensesController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentMethodsController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});


Auth::routes();

Route::middleware(['auth','user-role:USER|ADMIN',])->group(function()
{
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/category', [CategoryController::class, 'index']);
    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/order', [OrderController::class, 'index']);
    Route::get('/expenses', [ExpensesController::class, 'index']);
    Route::get('/payment-methods', [PaymentMethodsController::class, 'index']);
});


