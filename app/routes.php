<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('023af8434a106f0d86a42e576a23ac70', 'DevTestController@index');