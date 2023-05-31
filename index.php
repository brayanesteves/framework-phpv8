<?php
    ini_set('display_errors', 1);
    include_once './core/Request.php';
    include_once './core/Route.php';
    include_once './core/utils.php';
    include_once './core/App.php';
    include_once './app/controller/MainController.php';
    include_once './routes/web.php';
    use Core\Route;
    $request = new Request();
    App::assets($request->getPublicURL());
    // echo App::getPath();
    $routes  = Route::getRoutes();
    $url     = $request->getURL();
    $request->validate($routes, $url);
?>