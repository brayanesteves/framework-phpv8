<?php
    use Core\Route;

    /**
     *  Name Class: ProductController,
     * Name method: index
     */
    Route::get  (                    '/', "MainController@index");
    Route::get  (           '/test-view', function() {
        return ["id" => 1];
    });
    Route::get  (            '/api/{id}', "ProductController@show");
    Route::get  (           '/main/{id}', "MainController@show");
    Route::get  (           '/test/{id}', function($route) {
        return $route['id'];
    });
    Route::get  (         '/person/{id}', "MainController@show");
    Route::get  ('/person/{id}-{nombre}', "PersonController@index");
    Route::post (           '/test-post', "Test@index");
    Route::group(             '/product', function() {
        Route::get (         '/id', "Product 'id' - GET");
        Route::get (       '/view', function() {
            return view("index");
        });
        Route::post(            '/id', "Product 'id' - POST");
        Route::post(   '/name/{name}', "Product 'id' - POST");
        /**
         * Example:
         * http://localhost:8083/framework-phpv8/product/hello
         */
        Route::get('/{name}', function($route) {
            return view("product.index", ["name" => $route['name']]);
        });
    });

    $routes = Route::getRoutes();

    //print_r($routes);
?>