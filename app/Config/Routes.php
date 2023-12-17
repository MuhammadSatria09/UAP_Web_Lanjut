<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Home::home_admin', ['filter' => 'role:Admin']);
$routes->get('/karyawan', 'Home::home_karyawan', ['filter' => 'role:Karyawan']);
$routes->get('/customer', 'Home::home_customer', ['filter' => 'role:Customer']);
$routes->get('/login', 'Home::login');
$routes->get('/dashboard_admin', 'Home::dashboard_admin');
$routes->get('/transaksi', 'Home::transaksi');
$routes->get('/transaksi/(:any)/edit', 'Home::edit');
$routes->get('/dashboard', 'Home::dashboard');

// dashboard_karyawan
$routes->get('/dashboard_karyawan', 'PekerjaanController::index');
$routes->get('/dashboard_karyawan/create', 'PekerjaanController::create');
$routes->post('/dashboard_karyawan/store', 'PekerjaanController::store');
$routes->get('/dashboard_karyawan/edit/(:num)', 'PekerjaanController::edit/$1');
$routes->post('/dashboard_karyawan/update/(:num)', 'PekerjaanController::update/$1');
$routes->delete('dashboard_karyawan/delete/(:num)', 'PekerjaanController::delete/$1');
