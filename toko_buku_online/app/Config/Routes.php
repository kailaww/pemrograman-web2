<?php

use App\Controllers\Home;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// Public
$routes->get('/', 'Home::index');
$routes->get('/search', 'Home::search');
$routes->get('/cart', 'Home::cart');
$routes->get('/checkout', 'Home::checkout');
$routes->get('/submit', 'Home::submit');
$routes->get('/images/(:segment)', 'Home::images/$1');

service('auth')->routes($routes);



// Admin
$routes->group('admin', function ($routes){
    $routes->get('dashboard', 'AdminController::dashboard');
    $routes->get('daftar-buku', 'AdminController::daftar-buku');
    $routes->post('daftar-buku', 'AdminController::createBuku');
    $routes->get('transaksi', 'AdminController::transaksi');
    $routes->get('pelanggan', 'AdminController::pelanggan');
});
