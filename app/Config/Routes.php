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
$routes->get('/', 'Home::index');


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
//admin
$routes->get('admin', 'AdminController::index');

//login
$routes->get('login', 'LoginController::login');
$routes->post('login/validar', 'LoginController::validar');
$routes->get('login/salir', 'LoginController::salir');
$routes->get('registrar', 'LoginController::registro');
$routes->post('registrar/nuevo', 'LoginController::nuevo');

$routes->get('admin/configuraciones', 'AdminController::configuraciones');
$routes->post('admin/configuraciones/actualizar', 'AdminController::actualizar');

//toda las rutas del helado-------------------------------------
$routes->get('admin/helados', 'HeladoController::listar');
$routes->post('admin/helados/insertar', 'HeladoController::insertar');
$routes->get('admin/helados/borrar/(:num)', 'HeladoController::borrar/$1');
$routes->get('admin/helados/editar/(:num)', 'HeladoController::editar/$1');
$routes->post('admin/helados/actualizar', 'HeladoController::actualizar');

//toda las rutas del categoria-------------------------------------
$routes->get('admin/categorias', 'CategoriaController::listar');
$routes->post('admin/categorias/insertar', 'CategoriaController::insertar');
$routes->get('admin/categorias/borrar/(:num)', 'CategoriaController::borrar/$1');
$routes->get('admin/categorias/editar/(:num)', 'CategoriaController::editar/$1');
$routes->post('admin/categorias/actualizar', 'CategoriaController::actualizar');

//toda las rutas del roles-------------------------------------
$routes->get('admin/roles', 'RolController::listar');
$routes->post('admin/roles/insertar', 'RolController::insertar');
$routes->get('admin/roles/borrar/(:num)', 'RolController::borrar/$1');
$routes->get('admin/roles/editar/(:num)', 'RolController::editar/$1');
$routes->post('admin/roles/actualizar', 'RolController::actualizar');

//toda las rutas del usuarios-------------------------------------
$routes->get('admin/usuarios', 'UsuarioController::listar');
$routes->post('admin/usuarios/insertar', 'UsuarioController::insertar');
$routes->get('admin/usuarios/borrar/(:num)', 'UsuarioController::borrar/$1');
$routes->get('admin/usuarios/editar/(:num)', 'UsuarioController::editar/$1');
$routes->post('admin/usuarios/actualizar', 'UsuarioController::actualizar');



$routes->get('admin/ventas', 'VentaController::listar');



$routes->get('admin/perfil', 'PerfilController::index');

//toda las rutas del carrito/caja-------------------------------------
$routes->get('admin/caja', 'CajaController::index');
$routes->post('admin/caja/insertar', 'CajaController::insertar');
$routes->get('admin/caja/borrar/(:num)', 'CajaController::borrar/$1');
$routes->get('admin/caja/editar/(:num)', 'CajaController::editar/$1');
$routes->post('admin/caja/actualizar', 'CajaController::actualizar');
$routes->get('admin/caja/vaciar', 'CajaController::vaciar');
$routes->get('admin/caja/vender', 'CajaController::vender');


$routes->get('carrito', 'TiendaController::carrito');
$routes->post('carrito/insertar', 'TiendaController::insertar');
$routes->get('carrito', 'Home::carrito');
$routes->get('carrito/borrar/(:num)', 'TiendaController::borrar/$1');
$routes->get('carrito/vender', 'TiendaController::vender');


//cliente
$routes->get('contacto', 'Home::contacto');

$routes->get('perfil', 'Home::perfil');
$routes->get('nosotros', 'Home::nosotros');
$routes->get('producto', 'Home::producto');


$routes->get('tienda', 'Home::tienda');
$routes->get('producto/(:num)', 'TiendaController::editar/$1');


