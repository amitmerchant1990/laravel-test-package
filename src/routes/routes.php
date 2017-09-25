<?php

Route::get('calculator', function(){
   echo 'Hello world';
});

Route::get('add/{a}/{b}', 'Amitmerchant\Calculator\Controllers\CalculatorController@add');
Route::get('substract/{a}/{b}', 'Amitmerchant\Calculator\Controllers\CalculatorController@substract');