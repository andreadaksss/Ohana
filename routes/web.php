<?php

// Route::get('/', function () {
//     $children=Child::all();
//     return View::make('children')->with('children', $children);
// });

Route::get('/', function () {
    return view('/welcome');
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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('action_mother','MotherController@store');
Route::post('action_father','FatherController@store');
Route::post('action_spouse','SpouseController@store');
Route::post('action_child','ChildController@store');

Route::get('/user/uedit/{id}','UserController@edit');
Route::get('/medit/{id}','MotherController@edit');
Route::get('/fedit/{id}','FatherController@edit');
Route::get('/sedit/{id}','SpouseController@edit');
Route::get('/cedit/{id}','ChildController@edit');

Route::post('update/{id}','UserController@update');
Route::post('fedit/update/{id}','FatherController@update');
Route::post('medit/update/{id}','MotherController@update');
Route::post('sedit/update/{id}','SpouseController@update');
Route::post('cedit/update/{id}','ChildController@update');

Route::get('/view/','TreeController@show');
Route::get('/user/profile','UserController@show');
Route::get('/home/{id}','HomeController@index');



//Facebook Socialite

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider')->name('login.facebook');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');
