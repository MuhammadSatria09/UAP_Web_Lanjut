<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login','Home::login');
$routes->get('/dashboard','Home::dashboard');
$routes->get('/catalogue','Home::catalogue');
$routes->get('/catalogue/create','Home::createKatalog');
$routes->post('/catalogue/save','Home::saveKatalog');
$routes->get('/catalogue/(:num)','Home::editKatalog/$1');
$routes->put('/catalogue/(:num)/update','Home::updateKatalog/$1');
$routes->delete('/catalogue/(:num)','Home::deleteKatalog/$1');
$routes->get('/order','Home::order');
$routes->post('/order/store','Home::StoreOrder');
$routes->post('/assign','Home::StoreAssign');
$routes->post('/work','Home::StoreWork');

