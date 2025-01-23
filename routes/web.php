<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;

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


Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/second', function () {
        echo "Routing for Second Unit Testing.";
    });

    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
});



Route::get('/produk', function () {
    return view('admin.produk');
});

Route::get('/user/produk', function () {
    return view('user.produk');
});


Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('home', [LoginRegisterController::class, 'home'])->name('home');
    Route::get('/admin/home', [LoginRegisterController::class, 'adminhome'])->name('admin.home');
    Route::get('/admin/produk', [AdminController::class, 'produk'])->name('admin.produk');
    Route::get('/admin/produk', [AdminController::class, 'adminProduk'])->name('admin.produk');
    Route::get('/admin/tambahProduk', [AdminController::class, 'tambahProduk'])->name('admin.tambahProduk');
    Route::get('/admin/editProduk/{id}', [AdminController::class, 'editProduk'])->name('admin.editProduk');
    Route::get('/admin/deleteProduk/{id}', [AdminController::class, 'deleteProduk'])->name('admin.deleteProduk');
});

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/home', [LoginRegisterController::class, 'userHome'])->name('user.home');
    Route::get('/user/produk', [AdminController::class, 'userProduk'])->name('user.produk');
});

Route::post('/postTambahProduk', [AdminController::class, 'postTambahProduk'])->name('postTambahProduk');
Route::post('/postEditProduk/{id}', [AdminController::class, 'postEditProduk'])->name('postEditProduk');
Route::post('/postRegister', [LoginRegisterController::class, 'postRegister'])->name('postRegister');
Route::post('/postLogin', [LoginRegisterController::class, 'postLogin'])->name('postLogin');
Route::get('/logout', [LoginRegisterController::class, 'logout'])->name('logout');
