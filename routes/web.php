<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;

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

Route::get('/', 
    [HomeController::class, 'home']
);

Route::controller(CatalogController::class)->group(function (){
    Route::get('/catalog', 'index');
    
    Route::get('/catalog/show/{id}', 'show');
    
    Route::get('/catalog/create', 'create');
    
    Route::get('/catalog/edit/{id}', 'edit');
});

/*
Route::get('/catalog', function () {
    return view('catalog.index');
});

Route::get('/catalog/show/{id}', function ($id) {
    return view('catalog.show');
});

Route::get('/catalog/create', function () {
    return view('catalog.create');
});

Route::get('/catalog/edit/{id}', function ($id) {
    return view('catalog/edit');
});*/