<?php

namespace App;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\RequestInterface;
use Zend\Expressive\Application;

final class BootstrapMiddleware
{
    /**
     * @var Application
     */
    private $app;

    public function __construct()
    {
        /** @var ContainerInterface $container */
        $container = require __DIR__ . '/../../../config/container.php';

        /** @var Application $app */
        $this->app = $app = $container->get(Application::class);

        // Import programmatic/declarative middleware pipeline and routing
        // configuration statements
        require __DIR__ . '/../../../config/pipeline.php';
        require __DIR__ . '/../../../config/routes.php';
    }

    public function __invoke(RequestInterface $request)
    {
        $delegate = $this->app->getDefaultDelegate();

        return $this->app->process($request, $delegate);
    }
}
