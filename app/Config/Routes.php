<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('produk', 'Home::produk');
$routes->get('kategori', 'Home::kategori');
$routes->get('/kategori/otomotif', 'Home::otomotif');
$routes->get('/kategori/elektronik', 'Home::elektronik');
$routes->get('/kategori/fashion', 'Home::fashion');
$routes->get('/kategori/kesehatan', 'Home::kesehatan');
$routes->get('/kategori/kuliner', 'Home::kuliner');