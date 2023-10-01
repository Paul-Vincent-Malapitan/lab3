<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'MainController::home');
$routes->post('/signin', 'UserController::LoginAuth ');
$routes->post('/register', 'UserController::register');
['filter'=> 'authGuard'];

