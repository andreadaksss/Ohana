<?php

// Route::get('/', function () {
//     $children=Child::all();
//     return View::make('children')->with('children', $children);
// });

Route::get('/', function () {
    return view('/welcome');
});
Route::get('/user/profile', function () {
    return view('/user/profile');
});
Route::get('/familytree', function () {
    return view('tree/index');
});
Route::get('/application', function () {
    return view('about_us/application');
});
Route::get('/developers', function () {
    return view('about_us/developers');
});
Route::get('/mobile', function () {
    return view('about_us/mobile');
});
Route::get('/show', function () {
    return view('user/show');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('action_mother','MotherController@store');
Route::post('action_father','FatherController@store');
Route::post('action_spouse','SpouseController@store');
Route::post('action_child','ChildController@store');

// Route::post('action_user/{id}','UserController@update');

// Route::post('update_user/{id}','UserController@update');

Route::get('/uedit/{id}','UserController@edit');
Route::get('/medit/{id}','MotherController@edit');
Route::get('/fedit/{id}','FatherController@edit');
Route::get('/sedit/{id}','SpouseController@edit');
Route::get('/cedit/{id}','ChildController@edit');

Route::post('uedit/update/{id}','UserController@update');
Route::post('fedit/update/{id}','FatherController@update');
Route::post('medit/update/{id}','MotherController@update');
Route::post('sedit/update/{id}','SpouseController@update');
Route::post('cedit/update/{id}','ChildController@update');

Route::get('/view/','TreeController@show');



//Facebook Socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
