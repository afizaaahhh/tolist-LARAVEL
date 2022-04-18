<?php

use Illuminate\Support\Facades\Route;
use App\todo;
use App\Http\Controllers\TodoController;
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

Route::get('/', 'TodoController@index');

Route::get('create', 'TodoController@create');

Route::get('savelist', 'TodoController@store');

Route::get('delete/{id}', 'TodoController@destroy');

Route::get('edit/{id}', 'TodoController@edit');

Route::get('updatelist/{id}', 'TodoController@update');