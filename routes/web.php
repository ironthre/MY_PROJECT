<?php

use App\Http\Controllers\Admin\CatogoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\UserDashboardController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UsersideController;
use App\Http\Controllers\CartControllerController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmailController;
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
})->name('about');
Route::get('/help', function () {
    return view('help');
})->name('about');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/contact', [EmailController::class, 'createForm']);
Route::post('/contact', [EmailController::class, 'ContactUsForm'])->name('contact');

Route::get('product/mobile', function () {
    return view('/userside/products/index');
})->name('Mobile');

//USERSIDE ROUTES
Route::get('/', [UsersideController::class, 'index']);
Route::get('/All Products', [UsersideController::class, 'products']);
Route::get('view-category/{name}', [UsersideController::class, 'viewCategory']);
Route::get('category/{cate_name}/{prod_name}', [UsersideController::class, 'productview']);
Route::get('Product-Details/{prod_name}', [UsersideController::class, 'productDetails']);
Route::get('/product-list', [UsersideController::class, 'productList']);
Route::post('/searchProduct', [UsersideController::class, 'searchProduct']);



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/load-cart-data', [CartController::class, 'cartCount']);
Route::post('add-to-cart', [CartController::class, 'addProductToCart']);
Route::post('delete-cart-item', [CartController::class, 'deleteCartItem']);
Route::post('update-cart-item', [CartController::class, 'updateCart']);

Route::get('/load-wish-data', [WishlistController::class, 'wishCount']);
Route::post('add-to-wishlist', [WishlistController::class, 'addToWishlist']);
Route::post('delete-wish-item', [WishlistController::class, 'deleteWishItem']);



Route::middleware(['auth'])->group(function () {
    Route::get('cart', [CartController::class, 'viewCart']);
    Route::get('checkout', [CheckoutController::class, 'index']);
    Route::post('single-checkout', [CheckoutController::class, 'indexsingle']);
    Route::post('place-order', [CheckoutController::class, 'placeorder']);
    Route::post('single-order', [CheckoutController::class, 'singleOrder']);
    Route::get('my-orders', [UserController::class, 'index']);
    Route::get('view-orders/{id}', [UserController::class, 'viewOrder']);
    Route::get('wishlist', [WishlistController::class, 'index']);
});


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

    Route::get('all-orders', [OrderController::class, 'allOrders']);
    Route::get('orders', [OrderController::class, 'index']);
    Route::get('admin/view-orders/{id}', [OrderController::class, 'viewOrder']);
    Route::put('update-order/{id}', [OrderController::class, 'updateOrder']);
    Route::get('order-history', [OrderController::class, 'orderHistory']);

    Route::get('all-users', [UserDashboardController::class, 'allUsers']);
    Route::get('view-user/{id}', [UserDashboardController::class, 'viewUser']);
    //Route::get('delete-category/{id}', [ProductController::class, 'delete']);
});
