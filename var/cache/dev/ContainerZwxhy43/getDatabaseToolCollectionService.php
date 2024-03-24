<?php

namespace ContainerZwxhy43;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDatabaseToolCollectionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'Liip\TestFixturesBundle\Services\DatabaseToolCollection' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseToolCollection
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseToolCollection.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseTools'.\DIRECTORY_SEPARATOR.'AbstractDatabaseTool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseTools'.\DIRECTORY_SEPARATOR.'ORMDatabaseTool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseTools'.\DIRECTORY_SEPARATOR.'ORMSqliteDatabaseTool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseTools'.\DIRECTORY_SEPARATOR.'MongoDBDatabaseTool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseTools'.\DIRECTORY_SEPARATOR.'PHPCRDatabaseTool.php';

        $container->services['Liip\\TestFixturesBundle\\Services\\DatabaseToolCollection'] = $instance = new \Liip\TestFixturesBundle\Services\DatabaseToolCollection($container, NULL);

        $a = ($container->services['Liip\\TestFixturesBundle\\Services\\FixturesLoaderFactory'] ?? $container->load('getFixturesLoaderFactoryService'));

        $instance->add(new \Liip\TestFixturesBundle\Services\DatabaseTools\ORMDatabaseTool($container, $a));
        $instance->add(new \Liip\TestFixturesBundle\Services\DatabaseTools\ORMSqliteDatabaseTool($container, $a));
        $instance->add(new \Liip\TestFixturesBundle\Services\DatabaseTools\MongoDBDatabaseTool($container, $a));
        $instance->add(new \Liip\TestFixturesBundle\Services\DatabaseTools\PHPCRDatabaseTool($container, $a));

        return $instance;
    }
}
