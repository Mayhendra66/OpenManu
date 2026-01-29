<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'AuthController::login');
$routes->post('/login', 'AuthController::loginProcess');

$routes->get('/register', 'RegisterController::register');
$routes->post('/registerProcess', 'RegisterController::registerProcess');


$routes->get('pages/dashboard', 'Dashboard::index', ['filter' => 'auth']);


$routes->get('products', 'Products\ProductController::index', ['filter' => 'auth']);
$routes->get('action/create', 'Products\ProductController::createview', ['filter' => 'auth']);
$routes->post('products/store', 'Products\ProductController::createstore', ['filter' => 'auth']);
$routes->get('products/edit/(:num)', 'Products\ProductController::edit/$1');
$routes->get('products/delete/(:num)', 'Products\ProductController::delete/$1');
$routes->get('/logout', 'AuthController::logout'); 


$routes->get('/forget', 'ForgetController::forget');
$routes->post('/forgetProcess', 'ForgetController::forgetProcess');


