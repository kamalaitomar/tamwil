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

Route::redirect('/','/fr');


Route::get('/cycles/{id}', [App\Http\Controllers\FormController::class, 'show']);
Route::post('/offres', [App\Http\Controllers\OffreController::class, 'index']);

Route::get('/organisation/{type}',[App\Http\Controllers\OrganisationController::class , 'create'])->name('organisation');


Route::group(['prefix'=>'{locale}'], function(){

    Route::view('/', 'welcome')->name('home');

    Route::get('/financement', [App\Http\Controllers\FormController::class, 'index'])->name('financement');
    Route::get('/offre/{id}', [App\Http\Controllers\OffreController::class, 'show'])->name('offre');

    Route::get('/adminn', [App\Http\Controllers\AdminController::class, 'index'])->name('adminn');
    
    Route::get('/offres', [App\Http\Controllers\AdminController::class, 'offres']);
    Route::get('/organisations', [App\Http\Controllers\AdminController::class, 'organisations']);
    
    Route::get('/organisations',[App\Http\Controllers\OrganisationController::class , 'index'])->name('organisations');
    Route::get('/showorganisation/{id} ',[App\Http\Controllers\OrganisationController::class , 'show'])->name('showorganisation');
    
    // Route::resource('photos', PhotoController::class)->only([
    //     'index', 'show'
    // ]);
    
    Auth::routes();
});
