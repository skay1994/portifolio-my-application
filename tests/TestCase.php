<?php

namespace Tests;

use PHPUnit\Framework\TestCase as BaseTestCase;
use Skay1994\MyFramework\Application;
use Skay1994\MyFramework\Container;

abstract class TestCase extends BaseTestCase
{
    public Application $app;

    public Container $container;

    protected function setUp(): void
    {
        /** @var Application $app */
        $this->app = $app = require __DIR__.'/../bootstrap/app.php';
        $app->run();
        $app->routeDiscovery();
        $this->container = $app->container;
        parent::setUp();
    }
}
