<?php

require_once './core/router.php';

class Application
{
    public Router $routes;
    public function __construct()
    {
        $this->routes = new Router();
    }

    public function run()
    {
        $this->routes->resolve();
    }
}
