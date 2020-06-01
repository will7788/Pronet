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

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::get('/portfolio', 'PortfolioController@index')->name('portfolio');

Route::patch('/profile', 'ProfileController@update')->name('profile.update');

Route::patch('/portfolio', 'PortfolioController@update')->name('profile.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

