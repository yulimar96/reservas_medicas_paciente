<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SecretariatController;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
->name('home');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])
->name('admin.index')
->middleware('auth');
Route::get('/municipalities/{stateId}', [UserController::class, 'getMunicipalities']);
Route::get('/cities/{stateId}', [UserController::class, 'getCities']);
Route::get('/parishes/{municipalityId}', [UserController::class, 'getParishes']);
Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('user', UserController::class);
    Route::post('/User/reset', [App\Http\Controllers\UserController::class, 'reset'])->name('user.reset');
    // Route::patch('/user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');

});
Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('secretariat', secretariatController::class);
});