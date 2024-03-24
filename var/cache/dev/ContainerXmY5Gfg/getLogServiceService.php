<?php

namespace ContainerXmY5Gfg;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLogServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Game\LogService' shared autowired service.
     *
     * @return \App\Service\Game\LogService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/Game/LogService.php';

        return $container->privates['App\\Service\\Game\\LogService'] = new \App\Service\Game\LogService(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)));
    }
}
