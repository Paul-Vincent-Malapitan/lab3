<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/home', 'MainController::home');
$routes->get('/signin', 'UserController::Login');
$routes->get('/LogAuth', 'UserController::LoginAuth');
$routes->get('/register', 'UserController::register');
['filter'=> 'authGuard'];

