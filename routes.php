<?php

$router->get('', 'DashboardController@index');
//$router->get('posts', 'DashboardController@allPosts');
$router->get('register', 'DashboardController@register');
$router->get('login', 'DashboardController@login');
$router->get('posts/create', 'DashboardController@create');
//$router->get('posts/view', 'DashboardController@show');
$router->get('posts/edit', 'DashboardController@edit');
$router->post('posts/delete', 'DashboardController@delete');
$router->post('posts/store', 'PostController@store');
$router->get('posts', 'PostController@index');
$router->get('posts/view', 'PostController@show');
$router->get('posts/edit', 'PostController@edit');
$router->post('posts/delete', 'PostController@delete');