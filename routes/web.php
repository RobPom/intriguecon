<?php

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

Route::get('/', 'PagesController@index');
Route::get('/home', 'PagesController@index');
Route::get('/about', 'PagesController@about');

Route::resource('articles', 'ArticlesController');
Route::resource('games', 'GamesController');
Route::resource('events', 'EventsController');
Auth::routes();
Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
    return "this page requires that you be logged in and an Admin";
}]);

Route::get('/calendar/manage/{id}', 'DaysController@create');
Route::post('/calendar/add', 'DaysController@store');
Route::delete('/calendar/manage/{id}', 'DaysController@destroy');

Route::get('/timeslots/manage/{id}', 'TimeslotsController@create');
Route::post('/timeslots/add', 'TimeslotsController@store');
Route::delete('/timeslots/manage/{id}', 'TimeslotsController@destroy');
Route::get('/timeslots/show/{id}', 'TimeslotsController@create');

Route::get('/schedule/manage/{id}', 'SchedulesController@index');
Route::post('/schedule/add', 'SchedulesController@store');
Route::post('/schedule/remove', 'SchedulesController@remove');
Route::get('/schedule/show/{id}', 'SchedulesController@show');

Route::get('/schedule/{event}/timeslot/{timeslot}', 'TimeslotsController@schedule');

Route::get('/dashboard', 'DashboardController@index');
