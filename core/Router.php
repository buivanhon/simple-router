<?php

class Router
{
    
    public $routes = [
        'GET' => [],
        'POST' => [],
        'PUT' => [],
        'DELETE' => []
    ];

    public static function load($file) {
        $router = new static;
        require $file;
        return $router;
    }

    public function get($uri, $controller) 
    {
        return $this->routes['GET'][$uri] = $controller;
    }
    
    public function post($uri, $controller) 
    {
        return $this->routes['POST'][$uri] = $controller;
    }

    public function put($uri, $controller) 
    {
        return $this->routes['PUT'][$uri] = $controller;
    }

    public function delete($uri, $controller) 
    {
        return $this->routes['DELETE'][$uri] = $controller;
    }

    public function direct($uri) {
        $method = $_SERVER['REQUEST_METHOD'];

        if ( array_key_exists($uri, $this->routes[$method]) ) {
            [$class, $action] = explode('@', $this->routes[$method][$uri]);
            return $this->callAction($class, $action);
        } else {
            return new ErrorController;
        }
    }

    private function callAction($class, $action) {
        $controller = new $class;
        if ( method_exists($controller, $action) ) {
            return $controller->$action();
        } else {
            echo "\n{$class} does not respond to the {$action}() action.";
        }
    }
    
}

?>