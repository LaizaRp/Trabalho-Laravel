<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarroController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PortalController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');


Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [RegisterController::class, 'register']);


Route::middleware(['auth'])->group(function () {

    Route::resource('carros', CarroController::class)->except([
        'show' 
    ]); 
});


Route::get('/home', function () {
    return redirect()->route('carros.index');
})->name('home');



Route::get('/', [PortalController::class, 'index'])->name('portal.index');
Route::get('/carro/{carro}', [PortalController::class, 'show'])->name('portal.show');