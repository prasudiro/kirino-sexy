<?php

Route::group(array('module' => 'Xdcc', 'namespace' => 'App\Modules\Xdcc\Controllers'), function() {

    Route::get('xdcc', 'XdccController@index');
    Route::get('xdcc/category', 'XdccController@errors');
    Route::get('xdcc/category/{id}', 'XdccController@errors');
    Route::get('xdcc/category/{id}/{file}', 'XdccController@lists');

});
