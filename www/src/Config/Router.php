<?php

namespace App\Config;

use FastRoute\RouteCollector;
use App\Controller\HomeController;

class Router
{
    public static function config()
    {
        return \FastRoute\simpleDispatcher(function (RouteCollector $routes) 
        {
            # Added because Mongoose does not support .htaccess
            $routes->addGroup('/index.php', function (RouteCollector $routes) 
            {
                $routes->addRoute('GET', '/user', [HomeController::class, 'displayUser']);
                $routes->addRoute('GET', '/[{extra}]', [HomeController::class, 'index']);
            });

            # Added for default
            $routes->addRoute('GET', '/[{extra}]', [HomeController::class, 'index']);
        });
    }
}