<?php

/*
 *  (c) 2014 PMC Networks Ltd
 */

namespace Pmc\SlimFast\Controller;

use \Slim\Slim;
use \Twig_Error_Runtime;

/**
 * SlimFast Base Controller
 *
 * @author Paul Court <paul@pmcnetworks.co.uk>
 */
abstract class Base
{
    const ERROR_TEMPLATE = 'pages/error.twig';
    const ERROR_CODE = 500;
    const DEV_MODE = 'development';

    /** @var Slim */
    protected $app;


    public function __construct(Slim $app)
    {
        $this->app = $app;
        $this->addRoutes();
    }

    protected function render($template, $data = array(), $status = array())
    {
        try {
            $this->app->render($template, $data, $status);
        } catch (Twig_Error_Runtime $twigException) {
            $errorData = array();
            $errorData['errorMessage'] = sprintf(
                    "An error was thrown while rendering view template from class %s. (%s)",
                    get_class($this),
                    $twigException->getMessage());
            if ($this->app->getMode() == self::DEV_MODE) {
                $errorData['stackTrace'] = $twigException->getTraceAsString();
            }

            $this->app->render(self::ERROR_TEMPLATE, $errorData, self::ERROR_CODE);
        }
    }

    abstract protected function addRoutes();
}
