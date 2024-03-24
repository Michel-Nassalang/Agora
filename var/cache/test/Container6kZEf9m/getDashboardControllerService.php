<?php

namespace Container6kZEf9m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDashboardControllerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Controller\Platform\DashboardController' shared autowired service.
     *
     * @return \App\Controller\Platform\DashboardController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Platform/DashboardController.php';

        $container->services['App\\Controller\\Platform\\DashboardController'] = $instance = new \App\Controller\Platform\DashboardController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Platform\\DashboardController', $container));

        return $instance;
    }
}
