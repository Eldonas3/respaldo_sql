<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/exportaciones/exportar','ExportarController::exportar');
$routes->post('/exportaciones/exportar_sql','ExportarController::exportar_sql');
$routes->post('/exportaciones/exportar_csv','ExportarController::exportar_csv');
$routes->post('/exportaciones/exportar_xml','ExportarController::exportar_xml');