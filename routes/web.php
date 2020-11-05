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

/*--------------------------------------------------------------------------------------------------------------------*/

 // Frontend Routes

Route::get('/', [
    'uses' => 'Frontend\FrontendController@index',
    'as' => 'index'
]);

Route::group(['middleware' => ['auth']] , function(){

Route::get('/profile', [
    'uses' => 'Frontend\FrontendController@profile',
    'as' => 'user.profile'
]);

});
/*---------------------------------------------------------------------------------------------------------------------*/

// Artist Dashboard Routes

Route::get('/dashboard', [
    'uses' => 'Artist\Dashboardcontroller@index',
    'as' => 'dashboard'
]);

Route::resource('category', 'Admin\CategoryController');
Route::resource('subcategory', 'Admin\SubcategoryController');
Route::resource('childcategory', 'Admin\ChildcategoryController');
Route::resource('blog', 'Artist\BlogController');
Route::resource('product', 'Artist\ProductsController');

/*---------------------------------------------------------------------------------------------------------------------*/

// Admin Dashboard Routes

Route::group(['prefix' => '/admin'] , function(){

Route::get('/dashboard', [
    'uses' => 'Admin\dashboardController@index',
    'as' => 'admin.dashbord'
]);


Route::get('/users/orgnization', [
    'uses' => 'Admin\UserController@orgnization',
    'as' => 'admin.orgnization'
]);


Route::get('/users/traditional-user',[
    'uses' => 'Admin\UserController@traditional_user',
    'as' => 'admin.traditional-user'
]);


Route::get('/users/artist',[
    'uses' => 'Admin\UserController@artist',
    'as' => 'admin.artist'
]);

Route::get('/users/artist/profile', [
    'uses' => 'Admin\UserController@profile',
    'as' => 'artist.profile'
]);



Route::post('/user/artist/profile-update/{id}', 'Admin\UserController@update')->name('profile.update');



});






/*-------------------------------------------------------------------------------------------------------------------*/

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function() {
   Auth::routes(['register' => false]);
//   Route::get('/home', 'HomeController@index')->name('home');
});

/*-------------------------------------------------------------------------------------------------------------------*/

