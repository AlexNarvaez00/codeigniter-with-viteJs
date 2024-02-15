<?php

use App\Controllers\Images\ImageController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->presenter("images", [
  "namespace" => "",
  "controller" => ImageController::class
]);
