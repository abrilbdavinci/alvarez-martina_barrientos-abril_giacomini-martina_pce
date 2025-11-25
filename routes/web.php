<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AuthController;

// Home y About
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'about'])->name('about');

// Auth (login/logout)
Route::get('/login', [AuthController::class, 'login'])->name('auth.login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::post('/cerrar-sesion', [AuthController::class, 'logout'])->name('auth.logout');

// Productos
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductController::class, 'view'])->name('products.view')->whereNumber('product');
Route::get('/products/{product}/delete', [ProductController::class, 'delete'])->name('products.delete')->middleware('auth');;
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy')->middleware('auth');;
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit')->middleware('auth');;
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update')->middleware('auth');;

// Posts
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create')->middleware('auth');;
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');;
Route::get('/posts/{post}', [PostController::class, 'view'])->name('posts.view')->whereNumber('post');
Route::get('/posts/{post}/delete', [PostController::class, 'delete'])->name('posts.delete')->middleware('auth');;
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');;
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->name('posts.edit')->middleware('auth');;
Route::put('/posts/{post}', [PostController::class, 'update'])->name('posts.update')->middleware('auth');;

// Reviews
Route::get('/reviews', [ReviewController::class, 'index'])->name('reviews.index');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');
Route::get('/reviews/{review}', [ReviewController::class, 'view'])->name('reviews.view')->whereNumber('review');
Route::get('/reviews/{review}/delete', [ReviewController::class, 'delete'])->name('reviews.delete');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');

//auth
Route::get('iniciar-sesion',[\App\Http\Controllers\AuthController::class, 'login'])->name('auth.login');
Route::post('iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'authenticate'])->name('auth.authenticate');
Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])->name('auth.logout');
