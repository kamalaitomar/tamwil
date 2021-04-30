<?php

use Illuminate\Support\Facades\Auth;
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



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [App\Http\Controllers\FormController::class, 'index']);
Route::get('/cycles/{id}', [App\Http\Controllers\FormController::class, 'show']);

Route::post('/offres', [App\Http\Controllers\OffreController::class, 'store']);

Route::get('/offres/{id_profil}/{id_cycle}/{id_besoin}', [App\Http\Controllers\OffreController::class, 'index']);

Auth::routes();