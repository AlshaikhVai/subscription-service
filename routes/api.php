
<?php


$router->group(['prefix' => 'api'], function () use ($router) {

    $router->post('login',  'AuthController@login');

    $router->group(['middleware' => ['auth', 'user-access:user role'],'prefix' => 'users'],function () use ($router) {
        $router->post('/service/{serviceId}/subscribe',  'UserActionController@subscribe');
        $router->post('/service/{serviceId}/unsubscribe',  'UserActionController@unsubscribe');
    });
    $router->group(['middleware' => ['auth', 'user-access:partner role'],'prefix' => 'partners'],function () use ($router) {
        
        $router->post('/webhook/subscription',  'PartnerActionController@sendNotification');
    });
    $router->group(['middleware' => ['auth', 'user-access:merchent role'],'prefix' => 'merchents'],function () use ($router) {
        
        $router->post('/webhook/notification',  'MerchentActionController@updateSubscriptionStatus');
    });

});

http://localhost:8000/api/merchents/webhook/notification