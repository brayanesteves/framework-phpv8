<?php
    include_once './core/Request.php';
    include_once './core/Route.php';
    include_once './routes/web.php';
    use Core\Route;
    $request = new Request();
    $routes  = Route::getRoutes();
    $url     = $request->getURL();
    $request->validate($routes, $url);
?>