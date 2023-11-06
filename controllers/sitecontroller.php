<?php

include_once './core/application.php';
include_once './core/controller.php';

class siteControllers extends Controller
{
    public function home()
    {
        $params = [
            'name' => 'codeholic'
        ];
        // $app = new Application();
        // return $app->routes->renderView('home', $params);
        return $this->render('home', $params);
    }

    public function contact()
    {
        $app = new Application();
        //  return $this->render('contact', $params);
        return $app->routes->renderView('contact');
    }

    public function handleContact()
    {
        $app = new Application();
        $body =   $app->request->getBody();
        echo '<prev>';
        var_dump($body);
        echo '</prev>';
        exit;
        return 'Handling submitted data';
    }
}
