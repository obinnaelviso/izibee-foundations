<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/donation', [HomeController::class, 'donation'])->name('donation');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/causes', [HomeController::class, 'causes'])->name('causes');
Route::get('/stories', [HomeController::class, 'stories'])->name('stories');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/volunteer', [HomeController::class, 'volunteer'])->name('volunteer');
