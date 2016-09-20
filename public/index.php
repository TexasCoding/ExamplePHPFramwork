<?php

use src\Router;

require "../vendor/autoload.php";

$router = new Router();

$router->load($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
