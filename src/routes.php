<?php

Route::get('add/{a}/{b}', 'Annv\Calculator\Controllers\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'Annv\Calculator\Controllers\CalculatorController@subtract');