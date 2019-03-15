<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    //用户列表
    $router->get('users', 'UsersController@index');
    //留言列表
    $router->get('contact', 'ContactController@index');
    $router->get('contact/{id}', 'ContactController@show');
    //文章发布
    $router->get('topic', 'TopicsController@index');
    $router->get('topic/create', 'TopicsController@create');
    $router->post('topic', 'TopicsController@store');
    $router->get('topic/{id}', 'TopicsController@show');
    $router->get('topic/{id}/edit', 'TopicsController@edit');
    $router->put('topic/{id}', 'TopicsController@update');
});
