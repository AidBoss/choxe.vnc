<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\regiterController;
use App\Http\Controllers\userController;
use App\Http\Middleware\checkLoginMiddleware;

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
Route::prefix('admin')->middleware('adminCheck')->group(function () {

    // show hiển thị khi vào trang admin
    Route::get('/', [homeController::class, 'showAdmin']);
    Route::get('/listAcc', [homeController::class, 'showAdmin'])->name('showListAcc');

    //Thêm một tài khoản user vào database
    Route::get('/addUsers', [homeController::class, 'addUsers'])->name('addUsers');
    Route::post('/addUsers', [homeController::class, 'editUsersPost'])->name('editUsersPost');

    // sửa tài khoản 
    Route::get('/edit/{id}', [homeController::class, 'editUsers'])->name('editUsers');
    Route::post('/update', [homeController::class, 'editUsersPost'])->name('editUsersPost');

    // XÓA TÀI KHOẢN
    Route::get('/delete/{id}', [homeController::class, 'deleteUsers'])->name('deleteUsers');

    // show hiển thị trang danh sách bài viết mới
    Route::get('/listNews', [homeController::class, 'showListNews'])->name('showListNews');

    // show hiển thị trang danh sách sản phẩm
    Route::get('/listProduct', [homeController::class, 'showListProduct'])->name('showListProduct');

    // đăng xuất tài khoản
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
Route::prefix('user')->middleware('checkLogin')->group(function () {
    // show hiển thị khi vào trang User
    Route::get('/', [userController::class, 'showListUser'])->name('userIndex');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});
