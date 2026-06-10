<?php

namespace App\Core;

class Router
{
    private array $getRoutes = [];

    public function get(
        string $route,
        array $action
    ): void {
        $this->getRoutes[$route] = $action;
    }

    public function dispatch(
        string $route
    ): void {

        if (!isset($this->getRoutes[$route])) {

            http_response_code(404);

            echo '404';

            return;
        }

        [$controller, $method] = $this->getRoutes[$route];


        $instance = new $controller();

        $instance->$method();
    }
}