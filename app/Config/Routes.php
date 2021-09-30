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

//toda las rutas del helado-------------------------------------
$routes->get('admin/helados', 'HeladoController::listar');
$routes->post('admin/helados/insertar', 'HeladoController::insertar');
$routes->get('admin/helados/borrar/(:num)', 'HeladoController::borrar/$1');
$routes->get('admin/helados/editar/(:num)', 'HeladoController::editar/$1');
$routes->post('admin/helados/actualizar', 'HeladoController::actualizar');


$routes->get('admin/usuarios', 'UsuarioController::listar');
$routes->get('admin/ventas', 'VentaController::listar');
$routes->get('admin/roles', 'RolController::listar');
$routes->get('admin/categorias', 'CategoriaController::listar');

$routes->get('admin/perfil', 'PerfilController::index');
$routes->get('admin/caja', 'CajaController::index');


//cliente
$routes->get('contacto', 'Home::contacto');
$routes->get('carrito', 'Home::carrito');
$routes->get('perfil', 'Home::perfil');
$routes->get('tienda', 'Home::tienda');
$routes->get('nosotros', 'Home::nosotros');
$routes->get('producto', 'Home::producto');


