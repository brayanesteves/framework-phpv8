<?php
    use Core\Route;

    /**
     *  Name Class: ProductController,
     * Name method: index
     */
    Route::get  (                    '/', "ProductController@index");
    Route::get  (           '/test-view', function() {
        return ["id" => 1];
    });
    Route::get  (            '/api/{id}', "ProductController@show");
    Route::get  (           '/test/{id}', function($route) {
        return $route['id'];
    });
    Route::get  ('/person/{id}-{nombre}', "PersonController@index");
    Route::post (           '/test-post', "Test@index");
    Route::group(             '/product', function() {
        Route::get (         '/id', "Product 'id' - GET");
        Route::post(         '/id', "Product 'id' - POST");
        Route::post('/name/{name}', "Product 'id' - POST");
    });

    $routes = Route::getRoutes();

    //print_r($routes);
?>