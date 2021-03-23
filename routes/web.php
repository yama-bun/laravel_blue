<?php
Route::get('hello/{id?}', 'HelloController@index');
Route::post('hello', 'HelloController@post');
