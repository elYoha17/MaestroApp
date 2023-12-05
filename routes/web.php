<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ArrivalController;
use App\Http\Controllers\ContributionController;
use App\Http\Controllers\CreditorController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DebtorController;
use App\Http\Controllers\ExpenditureController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::resource('products', ProductController::class)->only('index');
    Route::resource('prices', PriceController::class)->only('index');
    Route::resource('activities', ActivityController::class)->only('index');
    Route::resource('creditors', CreditorController::class)->only('index');
    Route::resource('debtors', DebtorController::class)->only('index');
    Route::resource('purchases', PurchaseController::class)->only('index');
    Route::resource('arrivals', ArrivalController::class)->only('index');
    Route::resource('expenditures', ExpenditureController::class)->only('index');
    Route::resource('contributions', ContributionController::class)->only('index');
    
    Route::get('dashboard', DashboardController::class)->name('dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
