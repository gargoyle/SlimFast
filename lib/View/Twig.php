<?php

/*
 *  (c) 2014 PMC Networks Ltd
 */

namespace Pmc\SlimFast\View;

use \Slim\Views\Twig as OriginalTwig;
use \Slim\Views\TwigExtension;

/**
 * Extends Slim\Views\Twig and sets some default options.
 *
 * @author Paul Court <paul@pmcnetworks.co.uk>
 */
class Twig
    extends OriginalTwig
{
    public function __construct()
    {
        parent::__construct();
        $this->setParserOptions();
    }

    private function setParserOptions()
    {
        // Basic view params.
        $this->parserOptions = array(
            'charset' => 'utf-8',
            'cache' => realpath('../templates/cache'),
            'auto_reload' => true,
            'strict_variables' => false,
            'autoescape' => true
        );
        $this->parserExtensions = array(new TwigExtension());
    }
}
