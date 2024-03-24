<?php

namespace ContainerXK2F6Iq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTailwind_CssAssetCompilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'tailwind.css_asset_compiler' shared service.
     *
     * @return \Symfonycasts\TailwindBundle\AssetMapper\TailwindCssAssetCompiler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'asset-mapper'.\DIRECTORY_SEPARATOR.'Compiler'.\DIRECTORY_SEPARATOR.'AssetCompilerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfonycasts'.\DIRECTORY_SEPARATOR.'tailwind-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'AssetMapper'.\DIRECTORY_SEPARATOR.'TailwindCssAssetCompiler.php';

        return $container->privates['tailwind.css_asset_compiler'] = new \Symfonycasts\TailwindBundle\AssetMapper\TailwindCssAssetCompiler(($container->privates['tailwind.builder'] ?? $container->load('getTailwind_BuilderService')));
    }
}
