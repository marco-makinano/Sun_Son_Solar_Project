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

// Customer Portal
$routes->group('customer', static function ($routes) {
    $routes->get('schedule', 'CustomerController::schedule');
    $routes->get('book', 'CustomerController::book');
    $routes->post('book', 'CustomerController::processBooking');
    $routes->get('history', 'CustomerController::history');
    $routes->get('support', 'CustomerController::support');
    $routes->get('notifications', 'CustomerController::notifications');
});

// Technician Portal
$routes->group('technician', static function ($routes) {
    $routes->get('jobs', 'TechnicianController::myJobs');
    $routes->get('checkin', 'TechnicianController::checkin');
    $routes->post('checkin', 'TechnicianController::recordCheckin');
    $routes->get('report-problem', 'TechnicianController::reportProblem');
    $routes->get('announcements', 'TechnicianController::announcements');
});


// Admin Portal
$routes->group('admin', static function ($routes) {
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('schedule', 'AdminController::schedule');
    $routes->get('quotes', 'AdminController::quotes');
    $routes->get('users', 'AdminController::users');
    $routes->get('attendance', 'AdminController::attendance');
    $routes->get('problems', 'AdminController::problems');
});