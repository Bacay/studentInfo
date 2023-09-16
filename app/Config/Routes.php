<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/student', 'StudentController::sherwinski');
$routes->get('/student/(:any)', 'StudentController::student/$1');
