<?php

Route::get(‘/webhook’, ‘Minty\Bot\Controllers\Guest@index’);
Route::post(‘/webhook’, ‘Minty\Bot\Controllers\Guest@receive’);