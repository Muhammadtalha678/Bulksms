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
Route::get('/login','App\Http\Controllers\AuthController@index');

Route::get('/register','App\Http\Controllers\AuthController@register');

Route::post('/registerStore','App\Http\Controllers\AuthController@store');

Route::get('category','App\Http\Controllers\CategoryController@index');

Route::get('category/edit/{edit_id}','App\Http\Controllers\CategoryController@edit');

Route::post('category/editstore','App\Http\Controllers\CategoryController@editstore');

Route::get('category/create','App\Http\Controllers\CategoryController@create');

Route::post('category/store','App\Http\Controllers\CategoryController@store');

Route::get('/category/status/{status_id}','App\Http\Controllers\CategoryController@status');

Route::post('/category/delete/{delete_id}','App\Http\Controllers\CategoryController@delete');

Route::get('/message','App\Http\Controllers\MessageController@index');

Route::get('/message/create','App\Http\Controllers\MessageController@create');

Route::post('/message/store','App\Http\Controllers\MessageController@store');

Route::get('/message/edit/{edit_id}','App\Http\Controllers\MessageController@edit');

Route::post('/message/editstore','App\Http\Controllers\MessageController@editstore');

Route::get('/message/status/{status_id}','App\Http\Controllers\MessageController@status');

Route::get('/message/delete/{status_id}','App\Http\Controllers\MessageController@delete');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
