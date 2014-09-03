<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('before' => 'auth.basic'), function(){

    Route::get(
        '023af8434a106f0d86a42e576a23ac70',
        array(
            'as' => 'dev',
            'uses' => 'DevTestController@index',
        )
    );
    Route::controller('023af8434a106f0d86a42e576a23ac70', 'DevTestController');
});

// demos
Route::get('demo/{type}', function($type){

        $dir = opendir(app_path().'/views/demo');
        $links = array();
        while ($filename = readdir($dir)) {
            if (preg_match('/^([-\w]+)\.php$/', $filename, $m)) {
                $links[] = link_to("demo/{$m[1]}", $m[1]);
            }
        }

        echo join($links, ' / '), '<hr>';

        $view = "demo.{$type}";
        if (View::exists($view)) {
            return View::make($view);
        }

});
