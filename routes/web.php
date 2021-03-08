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
    return view('admin.authuser.login');
})->name('auth.login');

Route::get('/user/password/email', function () {
    return view('admin.authuser.password.email');
})->name('auth.password.email');

Route::get('/user/password/reset', function () {
    return view('admin.authuser.password.reset');
})->name('auth.password.reset');

Route::get('/user/register', function () {
    return view('admin.authuser.register');
})->name('auth.register');

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');

// ADMIN GROUP
Route::group([ 'middleware' => 'auth' ], function() {
    // MAIN DASHBOARD
    Route::get('admin', function () {
        return view('admin.dashboard') ;
    }) ;

    Route::get('admin/users', 'UsersController@index')->name('user.index') ;
    Route::get('test',function(){
        return view('admin.test');

   });
});
