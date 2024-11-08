<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])
->name('admin.index')
->middleware('auth');
Route::get('/User', [App\Http\Controllers\UserController::class, 'index'])
->name('user.index')
->middleware('auth');
Route::middleware(['web', 'auth'])->group(function () {
    Route::post('/User /store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
    Route::get('/User /create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
});
