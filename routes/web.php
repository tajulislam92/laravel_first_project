<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class,'home'])->name('home');

Route::get('/about-us', [FrontController::class,'about'])->name('about');

Route::get('/contact-us', [FrontController::class,'contact'])->name('contact');

Route::get('/services', [FrontController::class, 'services'])->name('service');
Route::resource('/catgory',CategoryController::class);
Route::resource('/subcatgory',SubCategoryController::class);

Route::get('/test-page', function () {
    return view('test');
})->name('test');
