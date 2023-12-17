<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login','Home::login');
$routes->get('/dashboard','Home::dashboard');
$routes->get('/catalogue','Home::catalogue',['filter' => 'role:Customer']);
$routes->get('/catalogue/create','Home::createKatalog',['filter' => 'role:Customer']);
$routes->post('/catalogue/save','Home::saveKatalog',['filter' => 'role:Customer']);
$routes->get('/order','Home::order',['filter' => 'role:Customer']);
$routes->post('/order/store','Home::StoreOrder',['filter' => 'role:Customer']);
$routes->post('/assign','Home::StoreAssign',['filter' => 'role:Admin']);
$routes->post('/work','Home::StoreWork',['filter' => 'role:Worker']);

