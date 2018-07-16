<?php


//routes for admin only
Route::group(['middleware'=>'admin:admin','namespace'=>'Admin','prefix'=>'admin'], function(){
	// admin route
	Route::resource('users','UsersController');
	Route::resource('admins','AdminController');
	// city routes
	Route::resource('city','CityController');
	// hotels routes
	Route::resource('hotels', 'HotelController');
	Route::delete('books/delete/{id}', 'BookController@delete_book');
});
//routes for users only
Route::group(['middleware'=>'user'], function(){
	// books route
	Route::post('book', 'BookController@book');
	Route::get('books', 'BookController@user_books');
});	

Route::get('/', 'Admin\HotelController@get_hotels');

//
Route::get('login', 'Auth\LoginController@login');
Route::post('login', 'Auth\LoginController@do_login');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('forgetpassword', 'Auth\LoginController@forgetpassword');
//

Route::get('/home', 'HomeController@index')->name('home');

Route::get('searchresult', 'SearchController@search');
// hotel routes
Route::get('hotel', 'Admin\HotelController@showhotel');


Route::get('seachcity', 'SearchController@citysearch');







