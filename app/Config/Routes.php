<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/admin', 'Home::home_admin',['filter' => 'role:Admin']);
$routes->get('/karyawan','Home::home_karyawan',['filter' => 'role:Karyawan']);
$routes->get('/customer','Home::home_customer',['filter' => 'role:Customer']);
$routes->get('/login','Home::login');
$routes->get('/dashboard_admin','Home::dashboard_admin');
$routes->get('/transaksi','Home::transaksi');
$routes->get('/transaksi/(:any)/edit', 'Home::edit');
$routes->get('/dashboard_karyawan','Home::dashboard_karyawan');
$routes->get('/dashboard','Home::dashboard');
$routes->get('/catalogue','Home::catalogue');
$routes->get('/catalogue/create','Home::createKatalog');
$routes->post('/catalogue/save','Home::saveKatalog');
$routes->get('/catalogue/(:num)','Home::editKatalog/$1');
$routes->put('/catalogue/(:num)/update','Home::updateKatalog/$1');
$routes->delete('/catalogue/(:num)','Home::deleteKatalog/$1');

