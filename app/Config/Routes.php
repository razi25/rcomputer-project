<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/Home', 'Home::index');

$routes->get('/', 'Home::index');
$routes->get('/pages-error-404', 'error404::index');

$routes->add('admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/index', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);
$routes->get('/admin/detail/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);

$routes->get('/User', 'UserProfile::index');
$routes->get('/User/Update', 'UserProfile::update/$1');



$routes->get('/pesanan', 'Pesanan::index');
$routes->delete('/pesanan/(:any)', 'Pesanan::delete/$1');
$routes->get('/pesanan/pending', 'Pesanan::pending');

$routes->get('pesanan/Tabel_Success', 'Pembayaran::index');
$routes->get('transaksi/(:num)', 'Pembayaran::transaksi/$1');


$routes->get('/Tabel_Kategori', 'Tabel_Kategori::index');
$routes->get('/Tabel_Kategori/(:num)', 'Tabel_Kategori::index/$1');
$routes->delete('/Tabel_Kategori/(:num)', 'Tabel_Kategori::deleteSub/$1');

$routes->get('/Tabel_Produk', 'Tabel_Produk::index');
$routes->delete('/Tabel_Produk/(:any)', 'Tabel_Produk::delete/$1');

$routes->get('/Tabel_Servis', 'Tabel_Servis::index');
$routes->delete('/Tabel_Servis/(:any)', 'Tabel_Servis::delete/$1');

$routes->get('/Contact', 'Contact::index');
$routes->get('/Message', 'Message::index', ['filter' => 'role:admin']);
$routes->get('/Message/(:any)', 'Message::detail/$1', ['filter' => 'role:admin']);
$routes->get('/Message/update', 'Message::update/$1', ['filter' => 'role:admin']);
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
