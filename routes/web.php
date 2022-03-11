<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardBookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [BookController::class, 'index']);
Route::get('/books', [BookController::class, 'allbooks']);
Route::get('/about', [BookController::class, 'about']);
Route::get('/books/{book:slug}', [BookController::class, 'detail']);
Route::get('/book/{writer:username}', [BookController::class, 'sort']);
Route::get('/genre/{genre:slug_name}', [BookController::class, 'genresort']);
Route::get('/list', [BookController::class, 'genre_list']);
Route::get('/category/{category:category_slug}', [BookController::class, 'categorysort']);

//admin route
Route::get('/sign-in', [SigninController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign-in', [SigninController::class, 'authenticate']);
Route::post('/sign-out', [SigninController::class, 'signout']);

Route::get('/sign-up', [SignupController::class, 'index'])->middleware('guest');
Route::post('/sign-up', [SignupController::class, 'store']);

//dashboard view
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('dashboard/books/checkSlug', [DashboardBookController::class, 'checkSlug']);

//dashbord route
Route::resource('/dashboard/books', DashboardBookController::class)->middleware('auth');
