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
     if($callback ===false){
         return "Error not found";
         exit;
       }
       if(is_string($callback)){
         return $this->renderView($callback);
       }
  return call_user_func($callback);
    }
    
    public function renderView($view){
      include_once  "../views/$view.php";
    }
}

?>
