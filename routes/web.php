<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\GalleryController;
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

Route::prefix('perpus-smecone')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/daftar', [AuthController::class, 'register'])->name('register');
    Route::post('/buat-user', [AuthController::class, 'create_user'])->name('create-user');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('/masuk-proses', [AuthController::class, 'check_login'])->name('check-login');
    Route::get('/book/{book:slug}', [HomeController::class, 'book'])->name('book');
    Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
    Route::get('/post/{article:slug}', [HomeController::class, 'post'])->name('post');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::post('/comment/{id}', [CommentController::class, 'comment'])->name('comment');

    Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/books/{book}', [BookController::class, 'show'])->name('books.show');

    // GALLERY
    Route::get('/gallery-smecone', [GalleryController::class, 'gallery_smecone'])->name('gallery-smecone');
    Route::middleware(['auth', 'role:admin'])->group(function () {
        Route::prefix('admin-page')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/create-category', [DashboardController::class, 'create_category'])->name('create-category');
        Route::post('/store-category', [DashboardController::class, 'store_category'])->name('store-category');
        Route::get('/destroy-category/{id}', [DashboardController::class, 'destroy_category'])->name('destroy-category');
        // ARTICLE
        Route::get('/data-article', [DashboardController::class, 'data_article'])->name('data-article');
        Route::get('/create-article', [DashboardController::class, 'create_article'])->name('create-article');
        Route::get('/comment-article', [DashboardController::class, 'comment_article'])->name('comment-article');
        Route::post('/store-article', [BlogController::class, 'store_article'])->name('store-article');
        Route::get('/destroy-article/{id}', [BlogController::class, 'delete_article'])->name('destroy-article');
        Route::get('/detail-article/{id}', [DashboardController::class, 'detail_article'])->name('detail-article');
        Route::post('/update-article/{id}', [BlogController::class, 'update_article'])->name('update-article');
        // BOOK
        Route::get('/data-books', [DashboardController::class, 'data_books'])->name('data-books');
        Route::get('/create-books', [DashboardController::class, 'create_books'])->name('create-books');
        Route::post('/store-books', [BookController::class, 'store_books'])->name('store-books');
        Route::post('/make-top-books/{id}', [BookController::class, 'topBook'])->name('top-books');
        Route::get('/delete-books/{id}', [BookController::class, 'delete_book'])->name('delete-books');
        Route::get('/edit-books/{id}', [DashboardController::class, 'edit_books'])->name('edit-books');
        Route::post('/update-books/{id}', [BookController::class, 'update_book'])->name('update-books');
        // USERS
        Route::get('/users-list', [UserController::class, 'index_users'])->name('index-users');
        Route::get('/users-detail/{id}', [UserController::class, 'detail_users'])->name('detail-users');
        Route::post('/users-update/{id}', [UserController::class, 'update_users'])->name('update-users');
        Route::get('/users-delete/{id}', [UserController::class, 'delete_users'])->name('delete-users');
        Route::get('/users-create', [UserController::class, 'create_users'])->name('create-users');
        Route::post('/users-store', [UserController::class, 'make_users'])->name('make-users');
    });
    });

});

