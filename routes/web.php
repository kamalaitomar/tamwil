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
Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
  ]);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/adminn', [App\Http\Controllers\AdminController::class, 'index'])->name('adminn');  
    Route::get('/offres', [App\Http\Controllers\Admin\OffreController::class, 'index']);
    Route::get('/organisations', [App\Http\Controllers\Admin\OrganisationController::class, 'index']);

    Route::get('/createoffre', [App\Http\Controllers\Admin\OffreController::class, 'create'])->name('createOffre') ;
});


Route::redirect('/','/fr');

Route::group(['prefix'=>'{locale}'], function(){
    Route::view('/', 'welcome')->name('home');
    Route::get('/financement', [App\Http\Controllers\FormController::class, 'index'])->name('financement');
    Route::get('/offre/{id}', [App\Http\Controllers\OffreController::class, 'show'])->name('offre');
});


Route::get('/cycles/{id}', [App\Http\Controllers\FormController::class, 'show']);
Route::post('/offres', [App\Http\Controllers\OffreController::class, 'index']);

