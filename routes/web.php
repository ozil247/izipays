<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RateController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
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
Route::get('/', [WelcomeController::class, 'welcome'])->name('wecome');

Auth::routes(['verify' => true]);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('user')->group(function(){
    Route::get('/',[HomeController::class, 'Dashboard'])->name('dashboard');


});


Route::middleware('auth')->prefix('admin')->group(function(){

    Route::get('/admin',[AdminController::class, 'admin'])->name('admin');
    Route::get('/currency',[CurrencyController::class, 'currency'])->name('currency');
    Route::post('/currency-upload',[CurrencyController::class, 'uploadCurrency'])->name('currency.upload');
    Route::get('/all-currency',[CurrencyController::class, 'allCurrency'])->name('all.currency');
    Route::get('/{id}/rate',[RateController::class, 'rate'])->name('rate');
    Route::post('/{id}/update-rate',[RateController::class, 'updateRate'])->name('update.rate');
    Route::get('/{id}/delete-currency',[CurrencyController::class, 'deleteCurrency'])->name('delete.currency');
    Route::get('/all-users',[UserController::class, 'allUsers'])->name('all.users');



});


require __DIR__.'/auth.php';
