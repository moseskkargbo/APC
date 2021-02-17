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

Route::get('/home', 'HomeController@index')->name('home');

// ADMIN GROUP
Route::group([ 'middleware' => 'auth' ], function() {
    // MAIN DASHBOARD
    Route::get('admin', function () {
        return view('admin.dashboard') ;
    }) ;

    Route::get('admin/users', 'UsersController@index')->name('user.index') ;
});