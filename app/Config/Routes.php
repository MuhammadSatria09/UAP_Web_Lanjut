<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Home::home_admin');
$routes->get('/karyawan','Home::home_karyawan');
$routes->get('/customer','Home::home_customer');
$routes->get('/login','Home::login');
$routes->get('/dashboard','Home::dashboard');
