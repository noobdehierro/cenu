<?php

use App\Http\Controllers\CustomerPromotionController;
use App\Http\Controllers\KoonolPaymentsController;
use App\Http\Controllers\KoonolUsersController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PromotionController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/customers', [CustomerPromotionController::class, 'index'])->middleware(['auth', 'verified'])->name('customers');
Route::get('/promotions', [PromotionController::class, 'index'])->middleware(['auth', 'verified'])->name('promotions');
Route::get('/koonolUsers', [KoonolUsersController::class, 'index'])->middleware(['auth', 'verified'])->name('koonolUsers');
Route::get('/koonolPayments', [KoonolPaymentsController::class, 'index'])->middleware(['auth', 'verified'])->name('koonolPayments');
Route::get('/koonolPaymentByCustomer', [KoonolPaymentsController::class, 'koonolPaymentByCustomer'])->middleware(['auth', 'verified'])->name('koonolPaymentByCustomer');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
