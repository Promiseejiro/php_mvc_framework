<?php

require_once './core/application.php';

$app= new Application();

$app->routes->get('/', function () {
    return 'Helo world';
});



 $app->run();
