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

// Route::get('/', function () {return view('pages/login');})->name('login');

Auth::routes();
// Route::get('/', function () {return view('pages/login');})->name('index');
// Route::get('dashboard', 'DashboardController@taskListDashboard')->name('dashboard');
// Route::get('form', 'FormController@showForm')->name('form');


Route::get('/panel', function () {
  return view('backend/pages/login');
})->name('login.pages');

Route::get('panel/dashboard', 'DashboardController@index')->name('dashboard');



Route::get('panel/index-user', 'UserController@index')->name('user.index');
Route::post('panel/store-user', 'UserController@store')->name('user.store');
Route::post('panel/update-user', 'UserController@update')->name('user.update');
Route::get('panel/delete-user/{id}', 'UserController@delete')->name('user.delete');
Route::get('panel/bind-user/{id}', 'UserController@bind')->name('user.bind');
