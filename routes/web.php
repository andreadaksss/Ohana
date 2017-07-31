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
    return view('tree/show');
});
Route::get('/view', function () {
    return view('profile/index');
});
// Route::get('/view', function () {
//     return view('profile/index');
// });
// Route::get('/profile', function () {
//     return view('profile/index');
// });
// Route::get('/tree', function () {
//     return view('profile/tree_shot');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('action_mother','MotherController@store');
Route::post('action_father','FatherController@store');
Route::post('action_spouse','SpouseController@store');
Route::post('action_child','ChildController@store');

// Route::post('action_user/{id}','UserController@update');

// Route::post('update_user/{id}','UserController@update');

Route::get('edit/{id}','UserController@edit');
Route::post('edit/update/{id}','UserController@update');

Route::get('/view','TreeController@show');

Route::get('/tree','TreeController@show_tree');
Route::get('/tree2','TreeController@show_tree2');

Route::get('/showchild','ChildController@show');

