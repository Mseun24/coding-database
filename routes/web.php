<?php

use App\Http\Controllers\TeacherController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\FetchController;
use App\Http\Controllers\AdminController;
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

Route::resource('', TeacherController::class);
Route::resource('', InfoController::class);
Route::resource('/teachers', TeacherController::class);
Route::get('/search/query', [SearchController::class,'query']);
Route::get('/search/query', [FetchController::class,'query']);
Route::post('/contact', [AdminController::class, 'store'])->name('contact-us');
Route::post('custom-login', [AdminController::class, 'customLogin'])->name('login.custom'); 
// Route::post('/register', [AdminController::class, 'store']);
Route::post('/create', [AdminController::class, 'adminLogin']);


// Route::view('/index', 'index');
// Route::view('/profile', 'profile');