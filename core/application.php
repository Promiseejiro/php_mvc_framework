<?php

require_once 'router.php';
require_once 'request.php';

class Application
{
    public $routes;
    public $request;

    public function __construct()
    {
        $this->request = new Request();
        $this->routes = new Router($this->request);
    }

    public function run()
    {
        $this->routes->resolve();
    }
}

?>
