<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/user/{id}', 'App\Http\Controllers\HomeController@show')->name('user');

Route::post('/AgeChecker', [HomeController::class, 'ageChecker'])->middleware('age.check');   

Route::put('/testPut','App\Http\Controllers\HomeController@testPut')->name('testPut');

Route::delete('/testDelete', 'App\Http\Controllers\HomeController@testDelete')->name('testDelete');

Route::patch('/testPatch', 'App\Http\Controllers\HomeController@testPatch')->name('testPatch');

Route::get('/error', 'App\Http\Controllers\HomeController@showError');

Route::get('/firstnameTest', 'App\Http\Controllers\HomeController@bladeFirstname')->name('firstnameTest');