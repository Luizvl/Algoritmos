<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setAutoRoute(false);

$routes->get('/', 'Home::index');

//$routes->get("articles", "Articles::index");
//$routes->get("articles/(:num)", "Articles::show/$1");
//$routes->get("articles/new", "Articles::new", ["as"=> "new_article"]);
//$routes->post("articles", "Articles::create");
//$routes->get("articles/(:num)/edit", "Articles::edit/$1");
//$routes->patch("articles/(:num)", "Articles::update/$1");
//$routes->delete("articles/(:num)", "Articles::delete/$1");
$routes->get("articles/(:num)/delete", "Articles::confirmDelete/$1");

$routes->resource("articles", ["placeholder" => "(:num)"]);

/*
$routes->get("articles/delete/(:num)", "Articles::delete/$1");
$routes->post("articles/delete/(:num)", "Articles::delete/$1");
*/