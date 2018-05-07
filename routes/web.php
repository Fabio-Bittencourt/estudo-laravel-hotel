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
Route::get('/form-add-room', 'RoomController@show' );
Route::post('/form-add-room/add', 'RoomController@create');
Route::get('/rooms/remove/{id}', 'RoomController@remove');
Route::get('/rooms/edit/{id}', 'RoomController@edit');
Route::post('/room/update/{id}', 'RoomController@update');

//HotelGuest
Route::get('/guests', 'HotelGuestController@list');
Route::get('/form-add-guest', 'HotelGuestController@show' );
Route::post('/form-add-guest/add', 'HotelGuestController@create');
Route::get('/guests/remove/{id}', 'HotelGuestController@remove');
Route::get('/form-edit-guest/edit/{id}', 'HotelGuestController@edit');
Route::post('/guest/update/{id}', 'HotelGuestController@update');

/*
//Reservation
Route::get('/reservations', 'ReservationController@list');
Route::get('/{action}', 'ReservationController@show' );
Route::post('/form-add-reservation/add', 'ReservationController@create');
Route::get('/reservation/remove/{id}', 'ReservationController@remove');
 */
