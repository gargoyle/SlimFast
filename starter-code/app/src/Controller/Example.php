<?php

/*
 *  (c) 2014 PMC Networks Ltd
 */

namespace Pmc\SlimFastExample\Controller\Example;

/**
 * Example controller.
 *
 * @author Paul Court <paul@pmcnetworks.co.uk>
 */
class Example
        extends \Pmc\SlimFast\Controller\Base
{
    protected function addRoutes()
    {
        $this->app->get('/', array($this, 'homeAction'));
        $this->app->get('/sidebar', array($this, 'sidebarAction'));
    }

    public function homeAction()
    {
        $this->app->render('pages/homepage.twig', array());
    }

    public function sidebarAction()
    {
        $this->app->render('pages/sidebarexample.twig', array());
    }
}
