<?php
    use Core\Route;

    Route::get  ('/', "Ruta inicial GET");
    Route::post ('/', "Ruta inicial POST");
    Route::group('/producto', function() {
        Route::get  ('/id', "Producto 'id' - GET");
        Route::post ('/id', "Producto 'id' - POST");
    });

    $routes = Route::getRoutes();

    print_r($routes);
?>