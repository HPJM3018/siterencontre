<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profiles/{user}',[App\Http\Controllers\ProfileController::class, 'show'])->name('profiles.show');
Route::get('/posts/create',[App\Http\Controllers\PostController::class, 'create'])->name('posts.create');
Route::post('/posts',[App\Http\Controllers\PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}',[App\Http\Controllers\PostController::class, 'show'])->name('posts.show');
Route::get('/profiles/{user}/edit',[App\Http\Controllers\ProfileController::class, 'edit'])->name('profiles.edit');
Route::patch('/profiles/{user}',[App\Http\Controllers\ProfileController::class, 'update'])->name('profiles.update');
//Route::post('/posts',[App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');