<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::group(array('before' => 'auth.basic'), function(){

    Route::get('dev', 'DevTestController@index');
    Route::controller('dev', 'DevTestController');
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
