<?php

use App\Http\Controllers\Admin\CatogoryController;
use App\Http\Controllers\UsersideController;
use Illuminate\Support\Facades\Route;
use Illuminate\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

Route::get('/sidenav', function () {
    return view('sidenav');
});
Route::get('/about', function () {
    return view('about');
});

Route::get('/header', function () {
    return view('header');
});

//USERSIDE ROUTES
Route::get('/', [UsersideController::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('categories', 'Admin\CatogoryController@index');
    Route::get('add-category', 'Admin\CatogoryController@add');
    Route::post('insert-category', 'Admin\CatogoryController@insert');
    Route::get('edit-category/{id}', [CatogoryController::class, 'edit']);
    Route::put('update-category/{id}', [CatogoryController::class, 'update']);
    Route::get('delete-category/{id}', [CatogoryController::class, 'delete']);

    Route::get('products', 'Admin\ProductController@index');
    Route::get('add-product', 'Admin\ProductController@add');
    Route::post('insert-product', 'Admin\ProductController@insert');
    Route::get('edit-product/{id}', 'Admin\ProductController@edit');
    Route::put('update-product/{id}', 'Admin\ProductController@update');
    Route::get('delete-product/{id}', 'Admin\ProductController@delete');
    //Route::get('delete-category/{id}', [ProductController::class, 'delete']);
});
