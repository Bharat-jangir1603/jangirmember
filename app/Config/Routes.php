<?php

use App\Controllers\Newhome;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */


// $routes->match(['get', 'post'], '/home', 'Newhome::index');
$routes->get('/', 'Home::index');//
$routes->post('/home', 'Newhome::index');//
$routes->post('/insert', 'Insert::index');//
$routes->get('delete/(:any)', 'Newhome::delete/$1');//
$routes->get('update/(:any)', 'Newhome::update/$1');//
$routes->post('/upd', 'Newhome::upd');//
$routes->get('daseboard', 'Newhome::dase');//
$routes->post('/code4/(:any)', 'Newhome::code4/$1');//
$routes->post('/insertad', 'Insert::insertad');//
$routes->post('/search/(:any)', 'Newhome::search/$1');
$routes->get('/logout', 'Newhome::logout');//






