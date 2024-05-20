<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PacketController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('transactions', TransactionController::class)->name('index', 'transaction');
    Route::resource('packets', PacketController::class)->name('index', 'packet')->name('store', 'packet.store');
    Route::resource('customers', CustomerController::class)->name('index', 'customer');
});
Route::get('logout')->name('logout');
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('login', [AuthController::class, 'login']);