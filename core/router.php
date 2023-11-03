<?php


class Router
{
    protected array $routes = [];

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {
        $_SERVER;
        echo '<prev>';
        var_dump($_SERVER);
        echo '<prev>';
    }
}
