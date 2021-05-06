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


Route::view('/', 'welcome')->name('home');

Route::get('/financement', [App\Http\Controllers\FormController::class, 'index'])->name('financement');


// Route::get('/', [App\Http\Controllers\FormController::class, 'index']);
Route::get('/cycles/{id}', [App\Http\Controllers\FormController::class, 'show']);

Route::post('/offres', [App\Http\Controllers\OffreController::class, 'index']);


Auth::routes();