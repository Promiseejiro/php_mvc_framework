<?php

include_once 'application.php';

class Controller
{
    public string $layout='main';

    public function SetLayout($layout){

    }
    public function render($view, $params = [])
    {
        $app = new Application();
        return $app->routes->renderView('home', $params);
    }
}
