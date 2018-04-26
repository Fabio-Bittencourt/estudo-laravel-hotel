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

Route::get('/', function(){ return view('/index');});
//Room
Route::get('/rooms', 'RoomController@list');
Route::get('/{action}', 'RoomController@show' );
Route::post('/form-add-room/add', 'RoomController@create');
Route::get('/rooms/remove/{id}', 'RoomController@remove');

//HotelGuest
Route::get('/guests', 'HotelGuestController@list');
Route::get('/{action}', 'HotelGuestController@show' );
Route::post('/form-add-guest/add', 'HotelGuestController@create');
Route::get('/guests/remove/{id}', 'HotelGuestController@remove');

