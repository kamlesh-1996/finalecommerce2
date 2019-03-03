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

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

//Redirect Home
Route::any('/','FrontController@index');
Route::get('/category/{id}','FrontController@getProduct');

Route::any('product/{slug}','FrontController@getSingleProduct');
Route::any('new-product','FrontController@getNewProduct');

//Logout
Route::any('logout',function(){
	Auth::logout();
	return redirect('login');
});

//Edit Profile
// Route::any('/admin/edit-profile','HomeController@editProfile')->middleware('auth');


Route::group(['prefix'=>'backend'],function(){

	//banner 
	Route::group(['prefix'=>'banner'],function(){
		Route::get('/', 'backend\BannerController@index')->middleware('auth');
		Route::any('store', 'backend\BannerController@store')->middleware('auth');
		Route::any('delete', 'backend\BannerController@destroy')->middleware('auth');
	});


	//Product Routes
	Route::group(['prefix'=>'product'],function(){
		Route::get('/', 'backend\ProductController@index')->middleware('auth');
		Route::get('create-new-product', 'backend\ProductController@create')->middleware('auth');
		Route::any('store', 'backend\ProductController@store')->middleware('auth');
		Route::any('edit/{id}', 'backend\ProductController@edit')->middleware('auth');
		Route::any('update', 'backend\ProductController@update')->middleware('auth');
		Route::any('delete', 'backend\ProductController@destroy')->middleware('auth');

		Route::any('delete-product-image', 'backend\ProductController@removeProductImage')->middleware('auth');


	});

	//Category Routes
	Route::group(['prefix'=>'category'],function(){
		Route::get('/', 'backend\CategoryController@index')->middleware('auth');
		Route::get('create-new-category', 'backend\CategoryController@create')->middleware('auth');
		Route::any('store', 'backend\CategoryController@store')->middleware('auth');
		Route::any('category-exists', 'backend\CategoryController@categoryExists')->middleware('auth');
		Route::any('delete', 'backend\CategoryController@destroy')->middleware('auth');
		Route::any('edit/{id}', 'backend\CategoryController@edit')->middleware('auth');
		Route::any('update/{id}', 'backend\CategoryController@update')->middleware('auth');
		Route::any('forcefully-delete', 'backend\CategoryController@forcefullyDelete')->middleware('auth');
		
	});


});

