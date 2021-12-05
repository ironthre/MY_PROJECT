<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});

<<<<<<< HEAD
Route::get('/header', function () {
=======
oute::get('/footer', function () {
    return view('footer');
});

Route::get('/header', function(){
>>>>>>> ad0a8c07cf7fa76a7854ecb9947f038d9fead515
    return view('header');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', 'Admin\FrontendController@index');
    Route::get('categories', 'Admin\CatogoryController@index');
    Route::get('add-category', 'Admin\CatogoryController@add');
    Route::post('insert-category', 'Admin\CatogoryController@insert');
});
