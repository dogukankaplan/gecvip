<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\AdminAuth;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/urunlerimiz', [PageController::class, 'products'])->name('products');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/indir', [PageController::class, 'download'])->name('download');
Route::get('/haberler', [PageController::class, 'news'])->name('news');
Route::get('/teknolojimiz', [PageController::class, 'technology'])->name('technology');
Route::get('/iletisim', [PageController::class, 'contact'])->name('contact');
Route::post('/iletisim', [PageController::class, 'submitContact'])->name('contact.submit');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'loginForm'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login.post');
    Route::post('/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::middleware(AdminAuth::class)->group(function () {
        Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/mesajlar', [AdminController::class, 'messages'])->name('admin.messages');
        Route::get('/mesajlar/{id}', [AdminController::class, 'showMessage'])->name('admin.message.show');
        Route::delete('/mesajlar/{id}', [AdminController::class, 'deleteMessage'])->name('admin.message.delete');
    });
});
