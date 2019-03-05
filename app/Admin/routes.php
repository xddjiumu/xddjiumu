<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
    $router->get('users', 'UsersController@index');
    $router->get('contactus', 'ContactusController@index');
    $router->get('contactus/{id}', 'ContactusController@show');
    $router->get('topic', 'TopicController@index');
    $router->get('topic/create', 'TopicController@create');
    $router->post('topic', 'TopicController@store');
    $router->get('topic/{id}/edit', 'TopicController@edit');
	$router->put('topic/{id}', 'TopicController@update');
});
