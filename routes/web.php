<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserInfoController;
use App\Http\Controllers\SubCategoryController;

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

Route::get('/', [FrontController::class, 'home'])->name('home');
Route::get('/about-us', [FrontController::class, 'about'])->name('about');
Route::get('/services-page', [FrontController::class , 'services'] )->name('services');
Route::get('/contact-page',  UserInfoController::class )->name('contact');
Route::resource('/category', CategoryController::class);
Route::resource('/subcategory', SubCategoryController::class);
Route::get('books', [FrontController::class, 'books']);

