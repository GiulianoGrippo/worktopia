<?php

require __DIR__ . '/../vendor/autoload.php';

//Use namespaces to avoid Framework\Router syntax
use Framework\Router;
use Framework\Session;

Session::start();


require '../helpers.php';


//Instantiate the Router
$router = new Router();

// Get Routes
$routes = require basePath('routes.php');

//Get the current uri and HTTP Method
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

//Route the request
$router -> route($uri);