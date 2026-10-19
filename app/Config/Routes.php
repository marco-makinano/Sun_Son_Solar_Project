<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

$routes->get('/', 'AuthController::register');

$routes->get('register', 'AuthController::register');
$routes->post('register', 'AuthController::processRegister');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::processLogin');
$routes->get('logout', 'AuthController::logout');

$routes->get('products', 'AuthController::products');
$routes->get('services', 'AuthController::services');
$routes->get('profile', 'AuthController::profile');