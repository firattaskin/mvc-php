<?php
use Router\Macaw as Router;

Router::get('/', 'Controllers\HomeController@index');
Router::get('/test', 'Controllers\HomeController@test');



Router::dispatch();