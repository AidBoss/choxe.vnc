<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\regiterController;
use App\Http\Controllers\userController;

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

// Auth::routes();
Route::get('/', function () {
    return view("Home.index");
});
Route::prefix('Home')->group(function () {
    // show display
    Route::get('/', [homeController::class, 'showHome'])->name('showHome');
    Route::get('/login', [LoginController::class, 'showLogin'])->name('showLogin');
    Route::get('/sign', [regiterController::class, 'showRegister'])->name('showRegister');
    // function get data from form
    Route::post('/login', [LoginController::class, 'loginPost'])->name('loginPost');
    Route::post('/sign', [regiterController::class, 'regiterPost'])->name('regiterPost');
});
Route::prefix('admin')->group(function () {
    // show display 
    Route::get('/', [homeController::class, 'showAdmin']);
    Route::get('/listAcc', [homeController::class, 'showAdmin'])->name('showListAcc');
    Route::get('/listNews', [homeController::class, 'showListNews'])->name('showListNews');
    Route::get('/listProduct', [homeController::class, 'showListProduct'])->name('showListProduct');
});

Route::prefix('user')->group(function () {
    // show display 
    Route::get('/', [userController::class, 'showListUser'])->name('userIndex');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
