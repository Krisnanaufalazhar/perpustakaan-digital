<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('buku', 'Buku::index');
$routes->get('buku/tambah', 'Buku::tambah');
$routes->post('buku/simpan', 'Buku::simpan');
$routes->get('buku/edit/(:num)', 'Buku::edit/$1');
$routes->post('buku/update/(:num)', 'Buku::update/$1');
$routes->get('buku/hapus/(:num)', 'Buku::hapus/$1');

$routes->get('/', 'Auth::login');

$routes->get('/login', 'Auth::login');
$routes->post('/login/process', 'Auth::attemptLogin');

$routes->get('/logout', 'Auth::logout');

$routes->get('/dashboard', 'Dashboard::index', [
    'filter' => 'auth'
]);
