<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Contracts\Http\Kernel;

define('LARAVEL_START', microtime(true));

// Modo mantenimiento
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Composer autoload
require __DIR__.'/../vendor/autoload.php';

/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

/** @var Kernel $kernel */
$kernel = $app->make(Kernel::class);

$request = Request::capture();
$response = $kernel->handle($request);

$response->send();
$kernel->terminate($request, $response);
