<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Debug\Debug;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Retrieves or sets the Symfony Dependency Injection container
 *
 * @param ContainerInterface|string $id
 *
 * @return mixed
 */
function symfony($id)
{
    static $container;

    if ($id instanceof ContainerInterface) {
        $container = $id;
        return;
    }

    return $container->get($id);
}

require_once 'wp-load.php';

$loader = require_once __DIR__.'/../symfony/vendor/autoload.php';

// Load application kernel
require_once __DIR__.'/../symfony/app/AppKernel.php';

$sfKernel = new AppKernel('dev', true);
$sfKernel->loadClassCache();
$sfKernel->boot();

// Add Symfony container as a global variable to be used in Wordpress
$sfContainer = $sfKernel->getContainer();

if (true === $sfContainer->getParameter('kernel.debug', false)) {
    Debug::enable();
}

symfony($sfContainer);

$sfRequest = Request::createFromGlobals();
$sfResponse = $sfKernel->handle($sfRequest);
$sfResponse->send();

$sfKernel->terminate($sfRequest, $sfResponse);
