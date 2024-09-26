<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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




    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::prefix('admin-page')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/create-category', [DashboardController::class, 'create_category'])->name('create-category');
        Route::post('/store-category', [DashboardController::class, 'store_category'])->name('store-category');
        Route::get('/destroy-category/{id}', [DashboardController::class, 'destroy_category'])->name('destroy-category');
        // USERS
        Route::get('/users-list', [UserController::class, 'index_users'])->name('index-users');
        Route::get('/users-detail/{id}', [UserController::class, 'detail_users'])->name('detail-users');
        Route::post('/users-update/{id}', [UserController::class, 'update_users'])->name('update-users');
        Route::get('/users-delete/{id}', [UserController::class, 'delete_users'])->name('delete-users');
        Route::get('/users-create', [UserController::class, 'create_users'])->name('create-users');
        Route::post('/users-store', [UserController::class, 'make_users'])->name('make-users');
        //HISTORY
        Route::get('/history-uhw', [HistoryController::class, 'his_uhw'])->name('history');
        //KERANJANG
        Route::get('/keranjang', [CartController::class, 'keranjang'])->name('keranjang');
    });
    });

});

