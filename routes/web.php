<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Frontend\IndexController;
// use App\Http\Controllers\FrontProductsController;

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


//frontend routes
Route::get('/', [IndexController::class, 'welcome']);
Route::get('/about', [IndexController::class, 'about']);
Route::get('/frontend/machines', [IndexController::class, 'machines'])->name('machines');
Route::get('/frontend/beans', [IndexController::class, 'beans'])->name('beans');
Route::get('/frontend/cups', [IndexController::class, 'cups'])->name('cups');

Route::get('/contact', [ContactController::class, 'index']);


//backend routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
