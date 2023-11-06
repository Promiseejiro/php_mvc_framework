<?php
class Router
{

    protected array  $routes = [];
    public $request;

    public function __construct($request)
    {
        $this->request = $request;
    }
    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
      $this->request->getPath();
    }
}
