<?php

use Slim\App;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;


return function (App $app) {
    // Parse json, form data and xml
    $app->addBodyParsingMiddleware();

    // Add the Slim built-in routing middleware
    $app->addRoutingMiddleware();

    // Add Slim/Twig view middleware
    $app->add(TwigMiddleware::createFromContainer($app, Twig::class));

    // Handle exceptions
    $app->addErrorMiddleware(true, true, true);
};