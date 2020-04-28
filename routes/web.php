<?php

Route::get('/', function () {
    return redirect('/company');
});


Route::get('/company', 'UserController@index');
Route::post('/comments', 'UserController@comment');

// ------------------ROUTE DASHBOARD

Route::group(['middleware' => 'admin'], function () {
    Route::resource('dashboard', 'DashboardController');
    Route::resource('profile', 'ProfileController');
    Route::resource('about', 'AboutController');
    Route::resource('hobby', 'HobbyController');
    Route::resource('portofolio', 'PortofolioController');
    Route::resource('motivation', 'MotivationController');
    Route::resource('contact', 'ContactController');
    Route::resource('comment', 'CommentController');
});

// ------------------END ROUTE DASHBOARD


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
