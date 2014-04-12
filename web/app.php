<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Slim\Slim;
use Slim\Views\Twig;
use Michelf\MarkdownExtra;

session_cache_limiter(false);
session_start();

$view = new Twig();
$app = new Slim(array(
    'mode' => 'development',
    'debug' => true,
    'templates.path' => __DIR__ . '/../app/views/',
    'view' => $view
));


// Basic view params.
$view->parserOptions = array(
    'charset' => 'utf-8',
    'cache' => realpath('../templates/cache'),
    'auto_reload' => true,
    'strict_variables' => false,
    'autoescape' => true
);
$view->parserExtensions = array(new \Slim\Views\TwigExtension());


// Global view items
$view->set('global', array(
    'name' => 'Your Site Name',
    'legalName' => 'Site/Company Legal Name',
    'legalLink' => 'http://www.example.com',
));

// Homepage
$app->get('/', function () use ($app) {
    $app->render('pages/homepage.twig', array());
});

$app->run();
