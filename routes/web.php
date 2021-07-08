<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index');


Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);


Route::get('/user/{id}',['as' => 'profile','uses' => 'UserController@show']);
Route::get('/post/create', 'PostController@create');
Route::post('/post/create', ['as' => 'createPost','uses' => 'PostController@store']);
// Route::get('/user/{id}/posts',['as' => 'indexPost','uses' => 'PostController@index']);
Route::get('/user/{id}/posts/{type}',['as' => 'indexPost','uses' => 'PostController@index']);