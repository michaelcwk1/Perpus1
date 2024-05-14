<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::prefix('perpus-smecone')->group(function () {
    Route::get('/daftar', [AuthController::class, 'register'])->name('register');
    Route::post('/masuk-proses', [AuthController::class, 'check_login'])->name('check-login');
    Route::get('/beranda', [HomeController::class, 'index'])->name('home');
    Route::get('/book/{book:slug}', [HomeController::class, 'book'])->name('book');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/post/{article:slug}', [HomeController::class, 'post'])->name('post');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
    Route::prefix('admin-page')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/create-category', [DashboardController::class, 'create_category'])->name('create-category');
        Route::post('/store-category', [DashboardController::class, 'store_category'])->name('store-category');
        Route::get('/destroy-category/{id}', [DashboardController::class, 'destroy_category'])->name('destroy-category');
        // ARTICLE
        Route::get('/data-article', [DashboardController::class, 'data_article'])->name('data-article');
        Route::get('/create-article', [DashboardController::class, 'create_article'])->name('create-article');
        Route::post('/store-article', [BlogController::class, 'store_article'])->name('store-article');
        Route::get('/destroy-article/{id}', [BlogController::class, 'delete_article'])->name('destroy-article');
        Route::get('/detail-article/{id}', [DashboardController::class, 'detail_article'])->name('detail-article');
        Route::post('/update-article/{id}', [BlogController::class, 'update_article'])->name('update-article');
        // BOOK
        Route::get('/data-books', [DashboardController::class, 'data_books'])->name('data-books');
        Route::get('/create-books', [DashboardController::class, 'create_books'])->name('create-books');
        Route::post('/store-books', [BookController::class, 'store_books'])->name('store-books');
    });
});

