<?php

namespace ContainerXK2F6Iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessageServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\Game\MessageService' shared autowired service.
     *
     * @return \App\Service\Game\MessageService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'Game'.\DIRECTORY_SEPARATOR.'MessageService.php';

        return $container->privates['App\\Service\\Game\\MessageService'] = new \App\Service\Game\MessageService(($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['App\\Repository\\Game\\MessageRepository'] ?? $container->load('getMessageRepositoryService')));
    }
}
