<?php

use Skay1994\MyFramework\Facades\Router;

require __DIR__.'/../vendor/autoload.php';

/** @var \Skay1994\MyFramework\Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

$app->routeDiscovery();

echo Router::handle($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);