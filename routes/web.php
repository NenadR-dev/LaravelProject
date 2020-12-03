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

Route::get('/user/{id}', function($id) {
    return 'User '.$id;
})->name('user');

Route::post('/testPost',function() {
    return "Top secret stuff! ! !";
})->middleware('age.check');   

Route::put('/testPut', function() {
    return 'Put method';
})->name('testPut');

Route::delete('/testDelete', function() {
    return 'Delete method';
})->name('testDelete');

Route::patch('/testPatch', function() {
    return 'Patch method';
})->name('testPatch');

Route::get('/error', function() {
    return 'Age restricted. No age param / age is < 18';
});

Route::get('/firstnameTest', function() {
    $name = 'Nenad';
    return view('firstname',['name' => $name]);
})->name('firstnameTest');