<?php

use Illuminate\Support\Facades\Route;

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

// Admin Dashboard Routes

Route::get('admin/dashboard', [
    'uses' => 'Admin\dashboardController@index',
    'as' => 'admin.dashbord'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('artist/dashboard', [
    'uses' => 'Artist\Dashboardcontroller@index',
    'as' => 'dashboard'
]);

Route::get('/Category',[
    'uses' => 'Admin\ProductController@category',
    'as' => 'category',
]);
