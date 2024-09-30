<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CartController;



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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('perpus-smecone')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login'); // GET for login page
    Route::post('/masuk-proses', [AuthController::class, 'check_login'])->name('check-login'); // POST for handling login
    Route::get('/daftar', [AuthController::class, 'register'])->name('register');
    Route::post('/buat-user', [AuthController::class, 'create_user'])->name('create-user');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/book/{book:slug}', [HomeController::class, 'book'])->name('book');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/post/{article:slug}', [HomeController::class, 'post'])->name('post');
    Route::get('/about', [HomeController::class, 'about'])->name('about');

    // GALLERY
    Route::get('/gallery-smecone', [GalleryController::class, 'gallery_smecone'])->name('gallery-smecone');
    Route::get('/gallery-artikel', [GalleryController::class, 'gallery_artikel'])->name('gallery-artikel');
    Route::get('/gallery-disertasi', [GalleryController::class, 'gallery_disertasi'])->name('gallery-disertasi');
    Route::get('/gallery-jurnal', [GalleryController::class, 'gallery_jurnal'])->name('gallery-jurnal');

    //BOOK-List 
    Route::get('/show', [GalleryController::class, 'showBooks']);
    
    //HISTORY
    Route::get('/history-uhw', [HistoryController::class, 'his_uhw'])->name('history');
    
    
    
    
    // Route untuk admin
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    });
    
    // Rute untuk user
    Route::middleware(['auth', 'role:user'])->group(function () {
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        //KERANJANG
        Route::get('/keranjang1', [CartController::class, 'keranjang2'])->name('keranjang1');
        Route::get('/keranjang2', [CartController::class, 'item1'])->name('keranjang2');
        //KERANJANG CRUD
        Route::post('/keranjang2', [CartController::class, 'addToCart'])->name('keranjang2');
        Route::put('/keranjang/update/{index}', [CartController::class, 'updateKeranjang'])->name('keranjang.update');
        Route::delete('/keranjang/delete/{index}', [CartController::class, 'deleteKeranjang'])->name('keranjang.delete');
    });
});
