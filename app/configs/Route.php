<?php

class Route {

    private $routes=[];

    public function get($path, $callback){
        global $routes;
        $path = trim($path, '/');
        $routes['GET'][$path]=$callback;
    }

    public function post($path, $callback){
        global $routes;
        $path = trim($path, '/');
        $routes['POST'][$path]=$callback;
    }

    public function dispatch($path){
        global $routes;
        $path = trim($path, '/');
        if(!in_array($path, array_keys($routes[$_SERVER['REQUEST_METHOD']]))){
            header("Location: /") ;
        }
        $callback = $routes[$_SERVER['REQUEST_METHOD']][$path];
        return call_user_func($callback);
    }

}
