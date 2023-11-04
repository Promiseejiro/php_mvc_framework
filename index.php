<?php

require_once 'core/application.php';

$app = new Application();

$app->routes->get('/', function () {
    return 'Hello world';
});
$app->routes->get('/contact', function () {
    return 'Hello world';
});

$app->run();

?>
