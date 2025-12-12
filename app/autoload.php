<?php

spl_autoload_register(function ($class) {

    // Chuyển namespace thành path file
    $classPath = str_replace('App\\', '', $class); 
    $classPath = str_replace('\\', '/', $classPath);

    // Tìm trong thư mục app
    $file = __DIR__ . '/' . $classPath . '.php';

    if (file_exists($file)) {
        require $file;
        return;
    }

    // Tìm trong thư mục database
    $dbFile = __DIR__ . '/../database/' . $classPath . '.php';
    if (file_exists($dbFile)) {
        require $dbFile;
        return;
    }
});

// Định nghĩa Router class
class Router {
    private static $routes = [];

    public static function get($uri, $action) {
        self::$routes['GET'][$uri] = $action;
    }

    public static function dispatch($uri) {
        $method = $_SERVER['REQUEST_METHOD'];

        if (isset(self::$routes[$method][$uri])) {
            $action = self::$routes[$method][$uri];

            list($controller, $method) = explode('@', $action);

            $controller = "App\\Controllers\\" . $controller;
            $obj = new $controller();

            return $obj->$method();
        }

        echo "404 - Route not found";
    }
}
