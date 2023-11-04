<?php
class Router
{
    public $request;
    protected $routes = [];

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
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback=$this->routes[$method][$path] ?? false;
        var_dump($callback) ;
        /*
       if($callback ===false){
         echo "Not found";
         exit;
       }
  echo call_user_func($callback);*/
    }
}

?>
