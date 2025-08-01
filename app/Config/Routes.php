<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/', 'HotelController::index'); // Add this line
$routes->get('/pages', 'HotelController::index');
$routes->get('/pages/create', 'HotelController::create');
$routes->post('/pages/store', 'HotelController::store');
$routes->get('/pages/edit/(:num)', 'HotelController::edit/$1');
$routes->post('/pages/update/(:num)', 'HotelController::update/$1');
$routes->get('/pages/delete/(:num)', 'HotelController::delete/$1');
$routes->get('/pages/searchResults', 'HotelController::search');
