<?php

include 'core/application.php';
require_once './controllers/sitecontroller.php';
require_once './controllers/authController.php';
$app = new Application();

$app->routes->get('/',  function () {
    $controller = new siteControllers();
    return $controller->home();
});
//the previous code uses 'contact' the  send the contact to render view contact.php
// $app->routes->get('/contact', 'contact');


$app->routes->get('/contact', function () {
    $controller = new siteControllers();
    return $controller->contact();
});

$app->routes->get('/login', function () {
    $controller = new AuthController();
    return $controller->login();
});

$app->routes->get('/login', function () {
    $controller = new AuthController();
    return $controller->login();
});

$app->routes->get('/register', function () {
    $controller = new AuthController();
    return $controller->register();
});

$app->routes->post('/register', function () {
    $controller = new AuthController();
    return $controller->register();
});


$app->routes->post('/contact',  function () {
    $controller = new siteControllers();
    return $controller->handleContact();
});



$app->run();
