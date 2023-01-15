<?php

namespace ContainerNBaxtRd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSettingsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Admin\SettingsController' shared autowired service.
     *
     * @return \App\Controller\Admin\SettingsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/AdminController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Admin/SettingsController.php';

        $container->services['App\\Controller\\Admin\\SettingsController'] = $instance = new \App\Controller\Admin\SettingsController(($container->privates['App\\Utils\\Acl'] ?? $container->load('getAclService')), ($container->services['translator'] ?? $container->getTranslatorService()));

        $instance->setContainer(($container->privates['.service_locator.y.fT_Gt'] ?? $container->load('get_ServiceLocator_Y_FTGtService'))->withContext('App\\Controller\\Admin\\SettingsController', $container));

        return $instance;
    }
}
