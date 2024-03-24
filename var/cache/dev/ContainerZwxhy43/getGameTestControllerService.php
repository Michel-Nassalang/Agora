<?php

namespace ContainerZwxhy43;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGameTestControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Game\GameTestController' shared autowired service.
     *
     * @return \App\Controller\Game\GameTestController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Game'.\DIRECTORY_SEPARATOR.'GameTestController.php';

        $container->services['App\\Controller\\Game\\GameTestController'] = $instance = new \App\Controller\Game\GameTestController(($container->privates['App\\Service\\Game\\GameManagerService'] ?? $container->load('getGameManagerServiceService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Game\\GameTestController', $container));

        return $instance;
    }
}
