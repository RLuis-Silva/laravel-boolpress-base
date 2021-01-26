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

// home
Route::get('/', 'StaticPageController@home')->name('homepage');

// About
Route::get('/About', 'StaticPageController@about') ->name('about');

// rotta controller 'post' di tipo resource (crud)
Route::resource('posts', 'PostController');
