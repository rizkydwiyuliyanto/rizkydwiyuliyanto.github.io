<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/huddle-landing-page', 'Huddle_Landing_Page::index');
$routes->get('/crowdfunding-page', 'CrowdFunding_Page::index');
$routes->get('/rock-paper-scissor-game', 'Rock_Paper_Scissor_Game::index');
