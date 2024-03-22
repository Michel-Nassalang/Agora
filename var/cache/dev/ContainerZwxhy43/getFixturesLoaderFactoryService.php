<?php

namespace ContainerZwxhy43;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFixturesLoaderFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Liip\TestFixturesBundle\Services\FixturesLoaderFactory' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\FixturesLoaderFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'FixturesLoaderFactory.php';

        return $container->services['Liip\\TestFixturesBundle\\Services\\FixturesLoaderFactory'] = new \Liip\TestFixturesBundle\Services\FixturesLoaderFactory($container, ($container->privates['doctrine.fixtures.loader'] ?? $container->load('getDoctrine_Fixtures_LoaderService')));
    }
}
