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

Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('form', 'FormController@showForm')->name('form');
