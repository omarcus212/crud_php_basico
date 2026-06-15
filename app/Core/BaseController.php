<?php
namespace App\Core;

abstract class BaseController 
{
    protected function redirect(string $route): void 
    {
        header('Location: ?route=' . $route, true, 303);
        exit;
    }
}