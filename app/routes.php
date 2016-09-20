<?php

use Src\Router;

$route = new Router();

/**
 * SET ROUTES
 **/

$route->get('/', 'HomeController@index');
$route->get('about', 'HomeController@about');
$route->get('pages', 'PagesController@index');
$route->post('test/post/route', 'HomeController@index');
