<?php

use Illuminate\Http\Request;
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
    return view('centerHome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('/about', function () {
    return view('about');
});

Route::get('/profile', 'ProfileController@index')->name('profile.index')->middleware('auth');
Route::put('/profile', 'ProfileController@editProfile')->name('profile.editProfile')->middleware('auth');
Route::post('/profile', 'ProfileController@resetPassword')->name('profile.resetPassword')->middleware('auth');
Route::get('/profile/pdf','ProfileController@pdf')->name('profile.pdf')->middleware('auth');

Route::get('/signIn', function () {
    return view('signIn');
})->name('signIn');

Route::get('/cart_page', 'CartController@index')->name('cart.index');
Route::post('/cart_page', 'CartController@store')->name('cart.store');
Route::delete('/cart_page/{product}', 'CartController@destroy')->name('cart.destroy');

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/contact','ContactController@create')->name('contact.create');
Route::post('contact','ContactController@store')->name('contact.store');

Route::get('/shopping', function () {
    return view('shopping.home');
});

Route::get('/ent', function () {
    return view('ent.home');
});

Route::get('shopping/grid','ShoppingController@grid')->name('shopping.filter');
Route::get('shopping/filter','ShoppingController@filter')->name('shopping.filter');

Route::get('shopping/tailleFilter','ShoppingController@tailleFilter')->name('shopping.tailleFilter');

Route::resource('food','FoodController');
Route::resource('shopping','ShoppingController');
Route::resource('ent','EntController');
Route::resource('wishlist','WishlistController')->middleware(['auth']);


Route::get('/step1','CheckoutController@step1')->name('checkout.step1')->middleware(['auth']);
Route::put('/UpdateUser','CheckoutController@UpdateUser')->name('checkout.UpdateUser')->middleware(['auth']);

Route::get('/step2','CheckoutController@step2')->name('checkout.step2')->middleware(['auth']);

Route::get('/thanks','CheckoutController@thanks')->middleware(['auth']);

Route::get('/admin/orders','AdminController@orders')->name('admin.orders');
Route::get('/admin/orders/details/{id}','AdminController@details')->name('admin.details');
Route::get('/admin/orders/orderEdit/{id}','AdminController@orderEdit')->name('admin.orderEdit');
Route::post('/admin/orders','AdminController@orderUpdate')->name('admin.orderUpdate');

Route::get('/admin/index','AdminController@index')->name('admin.index');
Route::get('/admin_login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin_login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/foodFilter','AdminController@foodFilter')->name('admin.foodFilter');
Route::get('/admin/entFilter','AdminController@entFilter')->name('admin.entFilter');
Route::get('/admin/shopFilter','AdminController@shopFilter')->name('admin.shopFilter');
Route::resource('admin','AdminController');



Route::post('/create-payment','CheckoutController@create_payment')->name('checkout.payment');






