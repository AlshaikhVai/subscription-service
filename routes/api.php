
<?php


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->post('login',  'AuthController@login');

    $router->group(['middleware' => ['auth', 'user-access:user role'],'prefix' => 'users'],function () use ($router) {
        $router->post('/',  function () use ($router) {
            return 1;
        });
    });
    $router->group(['middleware' => ['auth', 'user-access:partner role'],'prefix' => 'partners'],function () use ($router) {
        $router->post('/',  function () use ($router) {
            return 1;
        });
    });
    $router->group(['middleware' => ['auth', 'user-access:merchent role'],'prefix' => 'merchents'],function () use ($router) {
        $router->post('/',  function () use ($router) {
            return 1;
        });
    });

});

