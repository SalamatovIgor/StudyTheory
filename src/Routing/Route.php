<?php

namespace App\Routing;

use App\Controllers\MainController;

class Route
{
    private static function createMainController(): MainController
    {
        return new MainController();
    }

    public static function route(): void
    {
        preg_match('/\/([^\/]+)\/([^\/\?]+)/', $_SERVER['REQUEST_URI'], $params);

        if (!$params) {
            self::createMainController()->main();

            return;
        }

        $controllerName = '\App\Controllers\\'. ucfirst($params[1]). 'Controller';

        if (!class_exists($controllerName)) {
            self::createMainController()->error404();

            return;
        }

        $action = $params[2];

        $controller = new $controllerName();
        $controller->$action();
    }
}