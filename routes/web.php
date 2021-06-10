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

// HOMEPAGE
Route::get('/', 'PageController@index')->name('home');

// ABOUT
Route::get('/about', 'PageController@about')->name('about');

// AGENCY
Route::get('/agency', 'AgencyController@index')->name('agency');