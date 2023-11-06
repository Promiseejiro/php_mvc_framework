<?php
require_once './core/application.php';


$app = new Application();

$app->router->get('/', function () {
    return 'home';
});

$app->run();
