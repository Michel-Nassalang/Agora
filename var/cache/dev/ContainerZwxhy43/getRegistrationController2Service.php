<?php

namespace ContainerZwxhy43;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegistrationController2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Platform\RegistrationController' shared autowired service.
     *
     * @return \App\Controller\Platform\RegistrationController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'RegistrationController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Platform'.\DIRECTORY_SEPARATOR.'EmailVerifier.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'VerifyEmailHelperInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'VerifyEmailHelper.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-foundation'.\DIRECTORY_SEPARATOR.'UriSigner.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Factory'.\DIRECTORY_SEPARATOR.'UriSignerFactory.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'VerifyEmailQueryUtility.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'verify-email-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Generator'.\DIRECTORY_SEPARATOR.'VerifyEmailTokenGenerator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'MailerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'mailer'.\DIRECTORY_SEPARATOR.'Mailer.php';

        $container->services['App\\Controller\\Platform\\RegistrationController'] = $instance = new \App\Controller\Platform\RegistrationController(new \App\Security\Platform\EmailVerifier(new \SymfonyCasts\Bundle\VerifyEmail\VerifyEmailHelper(($container->services['router'] ?? self::getRouterService($container)), (new \SymfonyCasts\Bundle\VerifyEmail\Factory\UriSignerFactory($container->getEnv('APP_SECRET'), 'signature'))->createUriSigner(), new \SymfonyCasts\Bundle\VerifyEmail\Util\VerifyEmailQueryUtility(), new \SymfonyCasts\Bundle\VerifyEmail\Generator\VerifyEmailTokenGenerator($container->getEnv('APP_SECRET')), 3600), new \Symfony\Component\Mailer\Mailer(($container->privates['mailer.transports'] ?? $container->load('getMailer_TransportsService')), ($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container)), ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container))), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container))));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\Platform\\RegistrationController', $container));

        return $instance;
    }
}
