<?php

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


Auth::routes(['verify' => true]);
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('products/showproduct', 'productController@showproduct')->name('products.showproduct');






Route::get('/home', 'productController@displaygrid')->middleware('verified');

Route::get('products/displaygrid', 'productController@displaygrid')->name('products.displaygrid');
Route::get('products/additem/{id}', 'productController@additem')->name('products.additem');
Route::get('products/emptycart', 'productController@emptycart')->name('products.emptycart');
Route::get('orderdetails/checkout', 'orderdetailsController@checkout')->name('orderdetails.checkout');
Route::post('orderdetails/placeorder', 'orderdetailsController@placeorder')->name('orderdetails.placeorder');






//Route::resource('bookings', 'bookingController');

//Route::resource('orderdetails', 'orderdetailsController');

//Route::resource('products', 'productController');

//Route::resource('productratings', 'productratingController');