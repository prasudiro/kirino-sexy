<?php

Route::group(array('module' => 'Ddl', 'middleware' => ['api'], 'namespace' => 'App\Modules\Ddl\Controllers'), function() {

    Route::resource('ddl', 'DdlController');
    
});	
