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

Route::get('/group', 'GroupController@index')->name('group');

Route::get('/jobs', 'JobsController@index')->name('jobs');

Route::patch('/profile', 'ProfileController@update')->name('profile.update');

Route::patch('/portfolio', 'PortfolioController@update')->name('profile.update');

Route::patch('/group', 'GroupController@index')->name('group.update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

