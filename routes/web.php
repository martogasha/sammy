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
Auth::routes();

Route::get('/home', function () {
    return view('welcome');
});
Route::resource('/','HomePageController');
Route::resource('shop','ShopController');
Route::view('orderDetail','Client.orderDetail');
Route::resource('cart','CartController');
Route::post('deleteCart','CartController@deleteCart');
Route::get('checkout','CheckoutController@index');
Route::post('checkoutStore','CheckoutController@save');

Route::get('loginCustom','LoginController@index');
Route::post('Login','LoginController@login')->name('Login');
Route::get('registerCustom','RegisterController@index');
Route::post('Register','RegisterController@register')->name('Register');



Route::resource('admin','AdminController');
Route::resource('inventory','InventoryController');
Route::post('inventoryDelete','InventoryController@deleteInventory');
Route::resource('order','OrderController');
Route::resource('customers','CustomerController');
Route::resource('waiter','WaiterController');
Route::resource('manageWaiters','ManageWaiterController');
Route::get('waiterOrder','OrderController@waiterOrder');
Route::post('processOrder','OrderController@processOrder');
Route::post('reverseOrder','OrderController@reverseOrder');
Route::post('waiterCompleteOrder','OrderController@waiterComplete');
Route::resource('receipt','ReceiptController');
Route::get('waiterTable','WaiterController@table');
Route::post('waiterTable/{id}','WaiterController@waiterTable');
Route::resource('menu','MenuController');
Route::resource('delivery','DeliveryController');
Route::resource('table','TableController');
Route::post('tableDelete','TableController@deleteTable');



Route::get('profile','ProfileController@index');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
