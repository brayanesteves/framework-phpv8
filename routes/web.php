<?php
    use Core\Route;

    Route::get  (                    '/', "Route init GET");
    Route::get  (            '/api/{id}', "Route init GET");
    Route::get  ('/person/{id}-{nombre}', "Route init GET");
    Route::post (           '/test-post', "Route init POST");
    Route::group(             '/product', function() {
        Route::get (         '/id', "Product 'id' - GET");
        Route::post(         '/id', "Product 'id' - POST");
        Route::post('/name/{name}', "Product 'id' - POST");
    });

    $routes = Route::getRoutes();

    //print_r($routes);
?>