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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'HomeController@index']);
Route::match(['get', 'post'], 'admin', ['as' => 'admin', 'uses' => 'admin\LoginController@login']);
Route::match(['get', 'post'], 'register', ['as' => 'register', 'uses' => 'admin\LoginController@register']);
Route::match(['get', 'post'], 'forgotpassword', ['as' => 'forgotpassword', 'uses' => 'admin\LoginController@forgotpassword']);

Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'admin\dashboard\DashboardController@dashboard']);

Route::match(['get', 'post'], 'demo', ['as' => 'demo', 'uses' => 'admin\demo\DemoController@demo']);