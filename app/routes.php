<?php

Route::get('/', 'PostController@index');

Route::resource('/post', 'PostController');

Route::resource('/comment', 'CommentController');

Route::get('/register', 'Register@get');

Route::post('/register', 'Register@post');

Route::get('/login', 'Login@get');

Route::post('/login', 'Login@post');

Route::get('/logout', 'Logout@get');
