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
Route::get('/gallery', 'GalleryController@index')->name('gallery');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/createevent', 'CreateEventController@index')->name('createevent');


// After Auth
Route::get('/home', 'HomeAuthController@index')->name('home-auth');


// Dashoard
Route::get('/home-dashboard', 'DashboardController@index')->name('home-dashboard');
Route::get('/home-dashboard-event', 'DashboardEventController@index')->name('home-dashboard-event');
Route::get('/add-event', 'AddEventController@index')->name('add-event');
Route::get('/profile', 'ProfileController@index')->name('profile');



Auth::routes();

