<?php

Route::group(array('module' => 'Ddl', 'middleware' => ['web'], 'namespace' => 'App\Modules\Ddl\Controllers'), function() {

    Route::get('ddl', 'DdlController@index');
    Route::get('ddl/{id}', 'DdlController@detail');

Route::resource('ddl', 'DdlController');

});
