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

Route::get('/', 'HomeController@index')->name('home');

Route::get('/users', 'UsersController@index')->name('users');

Route::get('/dischi', 'DischiController@index') ->name('dischi');

Route::get('/corso', function (Request $request) {
    return view('corso', compact($request));
})->name('corso');

Route::get('/dopo-corso', function (Request $request) {
    return view('dopo-corso', compact($request));
})->name('dopo-corso');

Route::get('/camp', function (Request $request) {
    return view('camp', compact($request));
})->name('camp');
