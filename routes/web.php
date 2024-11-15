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
Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('user', UserController::class);
    Route::post('/User/reset', [App\Http\Controllers\UserController::class, 'reset'])->name('user.reset');
    // Route::patch('/user/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
});
Route::middleware(['web', 'auth'])->group(function () {
    Route::resource('secretaria', SecretariatController::class);
});
// Route::group(['middleware' => ['languageSwitcher']], function () {
    // Aquí van tus rutas que necesitan el cambio de idioma
    // Route::get('/', function () {
        // return view('home');
    // });

    // Otras rutas...
// });
Route::get('lang/{lang}', function ($lang) {
    Session::put('applocale', $lang);
    return redirect()->back();
})->name('lang.switch');
