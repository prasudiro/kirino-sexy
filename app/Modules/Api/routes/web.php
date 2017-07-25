<?php

Route::group(array('module' => 'Api', 'middleware' => ['web'], 'namespace' => 'App\Modules\Api\Controllers'), function() {

    Route::get('api', 'ApiController@index');
    Route::post('api/get_data', 'ApiController@get_data');

});
