<?php

Route::get('/', 'Admin\LoginController@login');
Route::get('/check-login', 'Admin\LoginController@checkLogin');
Route::get('/get-redis-value', 'Admin\LoginController@getRedisKeyToValue');