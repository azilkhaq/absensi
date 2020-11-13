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
Route::get('/','Auth\LoginController@index')->name('login');
Route::post('/postLogin','Auth\LoginController@postLogin');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/users', 'UsersController@index');
    Route::post('/usersCreate', 'UsersController@create');

    Route::get('/attendance', 'AttendancesController@index');
    Route::post('/postAttendance', 'AttendancesController@create');
});

