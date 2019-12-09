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


Route::resource('lodgment','Frontend\LodgmentController');

Route::get('/lodgment_item', function () {
    return view('layouts.lodgment_item');
})->name('lodg_item');

Route::get('reserv/{id}','Frontend\ReservController@show')->name('reserv.show');
Route::post('reservation/{id}','Frontend\ReservController@reserv')->name('reservation.reserv');

Route::post('/contact','Frontend\ContactController@sendMessage')->name('contact.send');

Auth::routes();


Route::group(['prefix'=>'admin','middleware'=>['auth','su'],'namespace'=>'Admin'], function () {
    Route::get('dashboard','DashboardController@index')->name('admin.dashboard');
    Route::resource('alojamiento', 'AlojamientoController');
    Route::get('reservacion','ReservacionController@index')->name('reservacion');
    Route::resource('habitacion','HabitacionController');
    Route::resource('promocion','PromoController');
    Route::resource('registro', 'RegistroController');
    Route::resource('typeRoom', 'TypeRoomController');

    Route::get('contact','ContactController@index')->name('contact.index');
    Route::get('contact/{id}','ContactController@show')->name('contact.show');
    Route::delete('contact/{id}','ContactController@destroy')->name('contact.destroy');
});

Route::group(['as'=>'recepcion.','prefix'=>'recepcion','middleware'=>'recepcion','namespace'=>'Recep'], function () {
    Route::get('dashboard','DashboardController@index')->name('dashboard');

});

