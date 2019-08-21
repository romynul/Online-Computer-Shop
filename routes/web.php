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

Route::get('/abc', function () {
    return view('test');
});

//Route::get('/login', 'LoginController@index');
Route::get('/login', ['as'=>'login.index','uses'=>'LoginController@index']);
Route::post('/login', ['uses'=>'LoginController@verify']);


	Route::get('/registration', 'HomeController@add')->name('home.registration');
	Route::post('/registration', 'HomeController@create');


Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/stdList', 'HomeController@show')->name('home.stdlist');
	Route::get('/home/edit/{sid}', 'HomeController@edit')->name('home.edit');
	Route::post('/home/edit/{sid}', 'HomeController@update');
	Route::get('/home/details/{sid}', 'HomeController@details')->name('home.details');
	Route::get('/home/add', 'HomeController@add')->name('home.add');
	Route::post('/home/add', 'HomeController@create');
	Route::get('/home/delete/{sid}', 'HomeController@delete')->name('home.delete');
	Route::post('/home/delete/{sid}', 'HomeController@destroy');	

	Route::get('/home/editc/{sid}', 'HomeController@editc')->name('home.editc');
	Route::post('/home/editc/{sid}', 'HomeController@updatec');
	Route::get('/home/addc', 'HomeController@addc')->name('home.addc');
	Route::post('/home/addc', 'HomeController@createc');
	Route::get('/home/deletec/{sid}', 'HomeController@deletec')->name('home.deletec');
	Route::post('/home/deletec/{sid}', 'HomeController@destroyc');
	Route::get('/searchprdc', 'HomeController@searchprd')->name('home.search');
	Route::get('/searchc', 'HomeController@search');
	Route::get('/home/detailsc/{sid}', 'HomeController@detailsc')->name('home.detailsc');
	Route::post('/home/detailsc/{sid}', 'HomeController@reviewadd');

	
	Route::get('/home/stdListc', 'HomeController@showc')->name('home.stdlistc');
	Route::post('/home/stdListc', 'HomeController@showfilter');
	
	
	
	
	Route::get('/home/deletereview/{sid}', 'HomeController@destroyreview')->name('home.deletereview');;
	
	
	Route::get('/products', 'ProductsController@index')->name('products.index');
	Route::get('/products/deletecart/{sid}', 'ProductsController@cartdestroy')->name('cart.delete');	
	Route::post('/products/deletecart/{products_id}', 'ProductsController@cartdestroy');	
	Route::get('/products/cart', 'ProductsController@cart')->name('products.cart');
	Route::get('/products/cartadd/{products_id}', 'ProductsController@cartadd')->name('products.cartadd');
	Route::get('/searchprd', 'ProductsController@searchprd')->name('products.search');
	Route::get('/search', 'ProductsController@search');
	Route::get('/products/stdList', 'ProductsController@show')->name('products.stdlist');
	Route::post('/products/stdList', 'ProductsController@showfilter');
	Route::get('/products/edit/{sid}', 'ProductsController@edit')->name('products.edit');
	Route::post('/products/edit/{sid}', 'ProductsController@update');
	Route::get('/products/details/{sid}', 'ProductsController@details')->name('products.details');
	Route::post('/products/details/{sid}', 'ProductsController@reviewadd');
	Route::get('/products/add', 'ProductsController@add')->name('products.add');
	Route::post('/products/add', 'ProductsController@create');
	Route::get('/products/delete/{sid}', 'ProductsController@delete')->name('products.delete');
	Route::post('/products/delete/{sid}', 'ProductsController@destroy');


	Route::get('/products/laptop', 'ProductsController@laptop')->name('products.laptop');
	Route::get('/products/ram', 'ProductsController@ram')->name('products.ram');
	Route::get('/products/casing', 'ProductsController@casing')->name('products.casing');
	Route::get('/products/storage', 'ProductsController@storage')->name('products.storage');
	Route::get('/products/monitor', 'ProductsController@monitor')->name('products.monitor');
});



Route::get('/logout', 'logoutController@index');

//Route::resource('accounts', 'AccountController');




