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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/info', function () {
    return view('info');
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

// Jobs Controller
Route::get('/jobs', 'JobsController@index')->name('jobs');
Route::get('/jobs/create', 'JobsController@create')->name('create');
Route::post('/jobs/store', 'JobsController@store')->name('store');
Route::get('/jobs/edit/{id}', 'JobsController@edit')->name('editJobs');
Route::post('/jobs/edit/update/{id}', 'JobsController@update')->name('update');
Route::post('/jobs/destroy/{id}', 'JobsController@destroy')->name('destroy');

// Employees Controller
Route::get('/employee', 'EmployeesController@index')->name('employee');
Route::get('/employees/create', 'EmployeesController@create')->name('create2');
Route::post('/employees/store', 'EmployeesController@store')->name('store2');
Route::get('/employees/edit/{id}', 'EmployeesController@edit')->name('editEmployee');
Route::post('/employees/edit/update/{id}', 'EmployeesController@update')->name('update2');
Route::post('/employees/destroy/{id}', 'EmployeesController@destroy')->name('destroy2');

