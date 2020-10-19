<?php namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('CategoryController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//Routes Controller CategoryController
$routes->get('/category', 'CategoryController::index');
$routes->get('/new/category', 'CategoryController::create');
$routes->post('/new/category', 'CategoryController::store');
$routes->get('/edit/category/(:num)', 'CategoryController::edit');
$routes->post('/edit/category/(:num)', 'CategoryController::update');
$routes->post('/delete/category/(:num)', 'CategoryController::delete');


//Routes Controller AssigmentController
$routes->get('/', 'AssigmentController::index');
$routes->get('/new/assigment', 'AssigmentController::create');


//Routes Controller AccountableController
$routes->get('/accountable', 'AccountableController::index');
$routes->get('/new/accountable', 'AccountableController::create');


/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
