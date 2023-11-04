<?php

require_once '../core/application.php';

$app = new Application();

$app->routes->get('/', function () {
    return 'Hemepage';
});


$app->routes->get('/contact', function () {
    return 'Contacts';
});


$app->run();

?>
