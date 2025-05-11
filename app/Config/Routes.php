<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::index');

$routes->get('/categories', 'Category::index');
$routes->get('/categories/create', 'Category::create');
$routes->post('/categories/store', 'Category::store');

