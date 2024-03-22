<?php

namespace ContainerZwxhy43;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0flv6qUService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0flv6qU' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0flv6qU'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'game' => ['privates', '.errored..service_locator.0flv6qU.App\\Entity\\Game\\SixQP\\GameSixQP', NULL, 'Cannot autowire service ".service_locator.0flv6qU": it needs an instance of "App\\Entity\\Game\\SixQP\\GameSixQP" but this type has been excluded in "config/services.yaml".'],
            'row' => ['privates', '.errored..service_locator.0flv6qU.App\\Entity\\Game\\SixQP\\RowSixQP', NULL, 'Cannot autowire service ".service_locator.0flv6qU": it needs an instance of "App\\Entity\\Game\\SixQP\\RowSixQP" but this type has been excluded in "config/services.yaml".'],
        ], [
            'game' => 'App\\Entity\\Game\\SixQP\\GameSixQP',
            'row' => 'App\\Entity\\Game\\SixQP\\RowSixQP',
        ]);
    }
}
