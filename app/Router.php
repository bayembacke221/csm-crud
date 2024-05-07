<?php
namespace App;
use Exception;

class Router
{

    protected  $routes = [
        'GET' => [],
        'POST' => []
    ];

    public static function load($string)
    {
        $router = new static;
        require $string;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function show($uri,$method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {

            $this->callMethod(
                ...explode('@', $this->routes[$method][$uri])
            );

            return $this->routes[$method][$uri];
        }
        throw new Exception('No route defined for this URI');
    }

    public function post($uri, $controller)
    {
        $this->routes['POST'][$uri] = $controller;
    }

    public function get($uri, $controller)
    {
        $this->routes['GET'][$uri] = $controller;
    }

    public function callMethod($controller, $method)
    {
        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;
        if (! method_exists($controller, $method)) {
            throw new Exception(
                "{$controller} does not respond to the {$method} method."
            );
        }
        return $controller->$method();
    }



}