<?php

require_once 'router.php';
require_once 'request.php';
require_once 'response.php';
require_once 'controller.php';


class Application
{
  public $controller;
  public $routes;
  public $request;
  public  $response;
  public static Application $app;
  public function __construct()
  {

    // self::$app = $this;
    $this->request = new Request();
    $this->response = new Response();
    $this->controller =new Controller();
    $this->routes = new Router($this->request, $this->response);
  }

  public function run()
  {
    echo  $this->routes->resolve();
  }
}