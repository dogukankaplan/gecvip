<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/urunlerimiz', [PageController::class, 'products'])->name('products');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');
Route::get('/indir', [PageController::class, 'download'])->name('download');
Route::get('/haberler', [PageController::class, 'news'])->name('news');
Route::get('/teknolojimiz', [PageController::class, 'technology'])->name('technology');
Route::get('/iletisim', [PageController::class, 'contact'])->name('contact');
