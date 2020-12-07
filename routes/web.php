<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FollowController;
//use App\Http\Controllers\FollowController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.show');
Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
Route::post('follow/{user}', [App\Http\Controllers\FollowController::class, 'store']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/p/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/p', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/p/{post}', [App\Http\Controllers\PostController::class, 'show']);

//Auth::routes();
