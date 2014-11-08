<?php

require_once __DIR__ . '/../vendor/autoload.php';

use \Pmc\SlimFast\View\Twig;
use \Slim\Slim;

session_cache_limiter(false);
session_start();

$view = new Twig();
$app = new Slim(array(
    'templates.path' => __DIR__ . '/../app/views/',
    'view' => $view,
));

// Only invocked if mode is 'production'
$app->configureMode('production', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug'=> false,
    ));
});

// Only invoked if mode is 'development'
$app->configureMode('development', function () use ($app) {
    $app->config(array(
        'log.enable' => false,
        'debug' => true,
    ));
});


// Global view items
$view->set('global', array(
    'displayName' => 'Your Site Name',
    'legalName' => 'Site/Company Legal Name',
    'legalLink' => 'http://www.example.com',

    'displayName' => 'Your Site Name',
    'legalName' => 'Company Legal Name',
    'legalLink' => 'http://www.example.com',
    'registeredAddress' => "Some Address\nSome Town\Postcode",
    'companyNumber' => '012345678',
    'gaTrackingID' => 'UA-xxxxxx-x',
));

// Controllers
new Pmc\SlimFastExample\Controller\Example\Example($app);

$app->run();
