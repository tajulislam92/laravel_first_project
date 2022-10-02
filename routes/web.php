<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('about',[
    'page_name' => 'About Page',
    'name'=>'Laravel 9'
    ]);
})->name('about');

Route::get('/contact-us', function () {
$page_name= "Contact Page";
$mobile = "01918300000";
    return view('contact', compact('page_name','mobile'));
})->name('contact');

Route::get('/services', function () {

    $services_1 = [
    'Web Design',
    'Web Development',
    'App Development',
    'Graphics Design',
    ];

    return view('services', compact('services_1'));

})->name('service');

Route::get('/test-page', function () {
    return view('test');
})->name('test');
