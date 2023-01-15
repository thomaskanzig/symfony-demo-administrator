<?php

namespace ContainerNBaxtRd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLanguageExtensionRuntimeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Twig\Runtime\LanguageExtensionRuntime' shared autowired service.
     *
     * @return \App\Twig\Runtime\LanguageExtensionRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/twig/twig/src/Extension/RuntimeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Twig/Runtime/LanguageExtensionRuntime.php';

        return $container->privates['App\\Twig\\Runtime\\LanguageExtensionRuntime'] = new \App\Twig\Runtime\LanguageExtensionRuntime();
    }
}
