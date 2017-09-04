<?php

Route::get('/', 'CustomerController@index');
Route::get('api/customer', 'CustomerController@getData');
Route::get('api/customer2', 'CustomerController@getData2');
