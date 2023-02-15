<?php
    // Composer autoloader
    require 'composer/vendor/autoload.php';
    
    // Autoload controllers and models
    spl_autoload_register(function ($class_name) {
        $path = "src/controller/{$class_name}.php";
        $path2 = "src/model/{$class_name}.php";

        if(file_exists($path)) include $path;
        else if(file_exists($path2)) include $path2;
    });

    // Include routes
    include 'src/route.php';
    
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];
    
    // Strip query string (?foo=bar) and decode URI
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);
    
    $uri = str_replace("/construcao-software", "", $uri);
    
    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);

    switch($routeInfo[0])
    {
        case FastRoute\Dispatcher::NOT_FOUND:
        {
            echo "Error 404: Page not found";
            break;
        }
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        {
            $allowedMethods = $routeInfo[1];
            echo "Error 405: Method Not Allowed";
            break;
        }
        case FastRoute\Dispatcher::FOUND:
        {
            $handler = $routeInfo[1];
            $vars = $routeInfo[2];
            
            // Create and call controller
            $controller = new $handler[0]();
            $method = $handler[1];
            $controller->$method();
            break;
        }
    }

    function renderView($view)
    {
        include __DIR__ . '/src/view/' . $view . '.php';
    }
?>