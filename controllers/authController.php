<?php

require_once './core/controller.php';
require_once './core/application.php';

class AuthController extends Controller
{

    public function login()
    {
        $app = new Application();

        if ($app->request->isPost()) {
            return 'handle submitted data handler';
        }
        $this->SetLayout('auth');
        return $app->routes->renderView('login');
    }
    

    public function register()
    {

        $app = new Application();
        if ($app->request->isPost()) {
            return 'handle submitted data handler';
        }
        $this->SetLayout('auth');
        return $app->routes->renderView('register');
    }
}
