<?php

Route::group(['prefix' => 'home/profil-npwp','middleware' => ['web', 'auth']], function() {
    
    Route::get('/', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@index')->name('profil-npwp.index');
    Route::get('/create', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@create')->name('profil-npwp.create');
    Route::get('/show/{id}', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@show')->name('profil-npwp.show');
    Route::post('/store', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@store')->name('profil-npwp.store');
    Route::get('/edit/{id}', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@edit')->name('profil-npwp.edit');
    Route::post('/edit/{id}', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@update')->name('profil-npwp.update');
    Route::get('/delete/{id}', 'Bantenprov\ProfilNpwp\Http\Controllers\ProfilNpwpController@destroy')->name('profil-npwp.destroy');


});