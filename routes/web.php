<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\OffreController;
use App\Http\Controllers\Admin\OrganisationController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\formController;
use App\Http\Controllers\OffreController as ControllersOffreController;
use App\Http\Controllers\OrganisationController as ControllersOrganisationController;
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
    // 'reset' => false,  Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

Route::group(['middleware'=>'auth'], function(){
    Route::resource('/admin/offre', OffreController::class);
    Route::resource('/admin/organisation', OrganisationController::class);
    Route::resource('/admin/article', ArticleController::class);
    
    Route::group(['middleware' => ['role:admin']], function () {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('adminn');  
        Route::resource('/admin/user', UserController::class);
    });
});

Route::post("/admin/article/create", [ArticleController::class, 'uploadEditorImage']);
Route::post("/admin/article/{article}/edit", [ArticleController::class, 'uploadEditorImage']);

Route::redirect('/','/fr');

Route::group(['prefix'=>'{locale}'], function(){
    Route::get('/', function(){
        $title = 'Tamwil';
        return view('welcome', compact('title'));
    })->name('home');

    Route::get('/financement', [App\Http\Controllers\FormController::class, 'index'])->name('financement');
    Route::get('/offre/{id}', [App\Http\Controllers\OffreController::class, 'show'])->name('offre');

    Route::get('/organisations',[App\Http\Controllers\OrganisationController::class , 'index'])->name('organisations');
    Route::get('/showorganisation/{id} ',[App\Http\Controllers\OrganisationController::class , 'show'])->name('showorganisation');

    Route::get('/articles',[App\Http\Controllers\ArticleController::class , 'index'])->name('articles');
    Route::get('/article/{slug}',[App\Http\Controllers\ArticleController::class , 'show'])->name('article');

    Route::resource('/about', AboutController::class)->only('index','store');
});

Route::post('/cycles', [FormController::class, 'getCycles']);
Route::post('/besoins', [FormController::class, 'getBesoins']);
Route::post('/offres', [ControllersOffreController::class, 'index']);


Route::post('/selectBesoins', [ControllersOrganisationController::class, 'getBesoins']);
Route::post('/findOrganisation', [ControllersOrganisationController::class , 'create']);