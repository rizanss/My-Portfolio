<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/myporto', 'Portfolio::myporto');
$routes->get('/brazilian-ecommerce', 'Portfolio::brazilian');
$routes->get('/global-inflation', 'Portfolio::inflation');
$routes->get('/spotify-analysis', 'Portfolio::spotify');
$routes->get('/cause-death', 'Portfolio::death');
$routes->get('/marketing-analysis', 'Portfolio::marketing');
$routes->get('/explore-sukabumi', 'Portfolio::explore');
$routes->get('/hicolleagues', 'Portfolio::hicolleagues');
$routes->get('/apemrasasutra', 'Portfolio::apemrasasutra');
$routes->get('/visit-campus', 'Portfolio::campus');
