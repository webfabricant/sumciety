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

Route::get('/', 'Frontend\FrontendController@index')->name('index');
/*---------------------------------------------------------------------------------------------------------------------*/

Route::get('/dashboard', [
    'uses' => 'Artist\Dashboardcontroller@index',
    'as' => 'dashboard'
]);

Route::resource('category', 'Admin\CategoryController');
Route::resource('blog', 'Artist\BlogController');

/*---------------------------------------------------------------------------------------------------------------------*/

// Admin Dashboard Routes

Route::get('admin/dashboard', [
    'uses' => 'Admin\dashboardController@index',
    'as' => 'admin.dashbord'
]);



/*-------------------------------------------------------------------------------------------------------------------*/

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function() {
   Auth::routes(['register' => false]);
   Route::get('/home', 'HomeController@index')->name('home');
});
