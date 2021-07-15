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

Route::get('/admin', function () {
    return view('layouts.admin-master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', 'AuthController@login')->middleware('guest')->name('login');
Route::post('/postLogin', 'AuthController@doLogin')->name('postLogin');
Route::get('/register', 'AuthController@register')->middleware('guest')->name('register');
Route::post('/postRegister', 'AuthController@doRegister')->name('postRegister');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'admin']],function(){
    Route::get('/admin/dashboard', 'Wadir3Controller@index')->name('admin.index');
    Route::get('/admin/laporan', 'Wadir3Controller@laporan')->name('admin.laporan');
    
});
