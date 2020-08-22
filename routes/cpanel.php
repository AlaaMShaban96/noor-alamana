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

Route::group(['prefix' => 'admin'], function() {
    Route::get('/login','Cpanel\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Cpanel\Auth\LoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Cpanel\Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('/register', 'Cpanel\Auth\RegisterController@register');
    Route::get('/','Cpanel\HomeController@index')->name('admin.home');
    Route::get('/logout', 'Cpanel\Auth\LoginController@logout')->name('admin.logout');
    Route::get('/password/reset','Cpanel\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email','Cpanel\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset/{token}','Cpanel\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('/password/reset','Cpanel\Auth\ResetPasswordController@reset');
});

Route::resource('category', 'Cpanel\Category\CategoryController');
Route::resource('item', 'Cpanel\Items\ItemController');
