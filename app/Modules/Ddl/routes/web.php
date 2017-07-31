<?php

Route::group(array('module' => 'Ddl', 'namespace' => 'App\Modules\Ddl\Controllers'), function() {

    Route::get('ddl', 'DdlController@index');
    Route::get('ddl/{id}/{file}', 'DdlController@show');
    Route::get('ddl/category', 'DdlController@errors');
    Route::get('ddl/category/{id}', 'DdlController@errors');
    Route::get('ddl/category/{id}/{file}', 'DdlController@lists');
    Route::get('action/download', 'DdlController@errors');
    Route::post('action/download', 'DdlController@download');

});
