<?php

Route::get('/', 'IndexController@index');
Route::get('/tree/{id}', 'IndexController@show');
Route::post('/tree', 'IndexController@store')->name('store');
Route::delete('/tree/{id}/delete', 'IndexController@delete')->name('delete');
