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

Route::get('/', function () {
    return view('layouts.index');
})->name('index');

Route::get('/contact', function () {
    return view ('layouts.contact');
})->name('contact');

Route::get('/about', function () {
    return view('layouts.about');
})->name('about');

Route::get('/lodgment', function () {
    return view('layouts.lodgment');
})->name('lodgments');

Route::get('/lodgment_item', function () {
    return view('layouts.lodgment_item');
})->name('lodg_item');


Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>'auth','namespace'=>'Admin'], function () {
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('alojamiento', 'AlojamientoController');
    Route::get('reservacion','ReservacionController@index')->name('reservacion');
    Route::get('habitacion','HabitacionController@index')->name('habitacion');
    Route::get('promocion','PromoController@index')->name('promocion');
    Route::resource('registro', 'RegistroController');
    Route::resource('typeRoom', 'TypeRoomController');
});

