<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::login');
$routes->post('/login', 'AuthController::loginProcess');

$routes->get('/register', 'RegisterController::register');
$routes->post('/registerProcess', 'RegisterController::registerProcess');


$routes->get('/dashboard', 'Dashboard::index', ['filter' => 'auth']);
$routes->get('/logout', 'AuthController::logout');

$routes->get('/forget', 'ForgetController::forget');
$routes->post('/forgetProcess', 'ForgetController::forgetProcess');


