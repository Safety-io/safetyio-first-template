<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

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

Route::get('/', function () {
    return view('pages.index');
})->name('home');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/team', function () {
    return view('pages.team');
})->name('team');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/condition', function () {
    return view('pages.condition');
})->name('condition');

Route::get('/blog',[BlogController::class, 'index'])->name('pages.blog');
Route::post('/contact',[BlogController::class,'send_mail'])->name('contact');
Route::get('/blog/{id}',[BlogController::class,'show'])->name('readBlog');
