<?php

namespace ContainerZwxhy43;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSixQPControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Game\SixQPController' shared autowired service.
     *
     * @return \App\Controller\Game\SixQPController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Game'.\DIRECTORY_SEPARATOR.'SixQPController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Game'.\DIRECTORY_SEPARATOR.'LogService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Game'.\DIRECTORY_SEPARATOR.'PublishService.php';

        $a = ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container));

        $container->services['App\\Controller\\Game\\SixQPController'] = $instance = new \App\Controller\Game\SixQPController($a, ($container->privates['App\\Repository\\Game\\SixQP\\ChosenCardSixQPRepository'] ?? $container->load('getChosenCardSixQPRepositoryService')), ($container->privates['App\\Service\\Game\\SixQP\\SixQPService'] ?? $container->load('getSixQPServiceService')), new \App\Service\Game\LogService($a), new \App\Service\Game\PublishService(($container->privates['mercure.hub.default.traceable'] ?? self::getMercure_Hub_Default_TraceableService($container))));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Game\\SixQPController', $container));

        return $instance;
    }
}
