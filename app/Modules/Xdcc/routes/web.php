<?php

Route::group(array('module' => 'Xdcc', 'middleware' => ['web'], 'namespace' => 'App\Modules\Xdcc\Controllers'), function() {

    Route::get('xdcc', 'XdccController@index');

});
