<?php

require __DIR__ . '/../vendor/autoload.php';

use Nyholm\Psr7\Factory\Psr17Factory;
use Nyholm\Psr7Server\ServerRequestCreator;
use Psr\Http\Server\RequestHandlerInterface;

$path = $_SERVER['PATH_INFO'];
$routes = require __DIR__ . '/../config/routes.php';

if (!array_key_exists($path, $routes)) {
    return http_response_code(404);
    exit();
}

session_start();

if (!isset($_SESSION['logged']) && !str_contains($path, 'login') && !str_contains($path, 'register')) {
    header('Location: /login');
} else if (isset($_SESSION['logged']) && str_contains($path, 'login') || isset($_SESSION['logged']) && str_contains($path, 'register')){
    header('Location: /list');
}

    /** @var RequestHandlerInterface $controller */
    $controller = new $routes[$path];

$psr17Factory = new Psr17Factory();
$creator = new ServerRequestCreator($psr17Factory, $psr17Factory, $psr17Factory, $psr17Factory);
$request = $creator->fromGlobals();
$response = $controller->handle($request);

foreach ($response->getHeaders() as $name => $values) {
    foreach ($values as $value) {
        header(sprintf('%s: %s', $name, $value), false);
    }
}

echo $response->getBody();
