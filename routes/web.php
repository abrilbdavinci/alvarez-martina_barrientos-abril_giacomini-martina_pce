<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;

// Home y About
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Productos con resource
Route::resource('products', ProductController::class)->except(['show']);
// Si quieres mantener 'view' en vez de 'show', puedes definirlo aparte:
Route::get('/products/{product}', [ProductController::class, 'view'])->name('products.view');

// Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'view'])->name('posts.view')->whereNumber('id');
Route::get('/posts/{id}/delete', [PostController::class, 'delete'])->name('posts.delete');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');

// Reviews
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}', [ReviewController::class, 'view'])->name('reviews.view')->whereNumber('id');
Route::get('/reviews/{review}/delete', [ReviewController::class, 'delete'])->name('reviews.delete');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
