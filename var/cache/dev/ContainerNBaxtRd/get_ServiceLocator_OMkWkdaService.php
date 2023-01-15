<?php

namespace ContainerNBaxtRd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OMkWkdaService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OMkWkda' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OMkWkda'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\SettingsController::address' => ['privates', '.service_locator.995ATiR', 'get_ServiceLocator_995ATiRService', true],
            'App\\Controller\\Admin\\SettingsController::profile' => ['privates', '.service_locator.995ATiR', 'get_ServiceLocator_995ATiRService', true],
            'App\\Controller\\Admin\\SettingsController::security' => ['privates', '.service_locator.995ATiR', 'get_ServiceLocator_995ATiRService', true],
            'App\\Controller\\Admin\\UserController::add' => ['privates', '.service_locator.995ATiR', 'get_ServiceLocator_995ATiRService', true],
            'App\\Controller\\Admin\\UserController::edit' => ['privates', '.service_locator.JCffzLk', 'get_ServiceLocator_JCffzLkService', true],
            'App\\Controller\\Admin\\UserController::index' => ['privates', '.service_locator.3OxRG1i', 'get_ServiceLocator_3OxRG1iService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.RfqKwIj', 'get_ServiceLocator_RfqKwIjService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\Admin\\SettingsController:address' => ['privates', '.service_locator.995ATiR', 'get_ServiceLocator_995ATiRService', true],
            'App\\Controller\\Admin\\SettingsController:profile' => ['privates', '.service_locator.995ATiR', 'get_ServiceLocator_995ATiRService', true],
            'App\\Controller\\Admin\\SettingsController:security' => ['privates', '.service_locator.995ATiR', 'get_ServiceLocator_995ATiRService', true],
            'App\\Controller\\Admin\\UserController:add' => ['privates', '.service_locator.995ATiR', 'get_ServiceLocator_995ATiRService', true],
            'App\\Controller\\Admin\\UserController:edit' => ['privates', '.service_locator.JCffzLk', 'get_ServiceLocator_JCffzLkService', true],
            'App\\Controller\\Admin\\UserController:index' => ['privates', '.service_locator.3OxRG1i', 'get_ServiceLocator_3OxRG1iService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.RfqKwIj', 'get_ServiceLocator_RfqKwIjService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\Admin\\SettingsController::address' => '?',
            'App\\Controller\\Admin\\SettingsController::profile' => '?',
            'App\\Controller\\Admin\\SettingsController::security' => '?',
            'App\\Controller\\Admin\\UserController::add' => '?',
            'App\\Controller\\Admin\\UserController::edit' => '?',
            'App\\Controller\\Admin\\UserController::index' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\SettingsController:address' => '?',
            'App\\Controller\\Admin\\SettingsController:profile' => '?',
            'App\\Controller\\Admin\\SettingsController:security' => '?',
            'App\\Controller\\Admin\\UserController:add' => '?',
            'App\\Controller\\Admin\\UserController:edit' => '?',
            'App\\Controller\\Admin\\UserController:index' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
