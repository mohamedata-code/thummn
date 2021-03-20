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


Route::get('/',function (){
    return redirect()->route('admin_show_login');
});
Route::get('admin/login','Auth\AuthController@doLogin')->name('admin_show_login');
Route::post('admin/login','Auth\AuthController@login')->name('admin_login');
Route::post('admin/logout', 'Auth\AuthController@logout')->name('logout');





Route::group(array('prefix' => 'dashboard','as'=>'admin.', 'middleware' => ['admin','auth']), function() {

    Route::get('/', 'Admin\AdminController@index')->name('dashboard');
    Route::resource('users', 'Admin\UsersController');
});

