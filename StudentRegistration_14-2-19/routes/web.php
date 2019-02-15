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

Route::get('/login', 'StudentController@Login');
Route::get('/Index', 'StudentController@Index');
Route::get('/register', 'StudentController@Registration');
Route::get('/menu', 'StudentController@Menu');
Route::resource('test','TestsController');