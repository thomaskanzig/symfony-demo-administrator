<?php

namespace ContainerNBaxtRd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLocationCityControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\Api\LocationCityController' shared autowired service.
     *
     * @return \App\Controller\Api\LocationCityController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/Api/LocationCityController.php';

        $container->services['App\\Controller\\Api\\LocationCityController'] = $instance = new \App\Controller\Api\LocationCityController(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['security.token_storage'] ?? $container->getSecurity_TokenStorageService()), ($container->services['translator'] ?? $container->getTranslatorService()));

        $instance->setContainer(($container->privates['.service_locator.y.fT_Gt'] ?? $container->load('get_ServiceLocator_Y_FTGtService'))->withContext('App\\Controller\\Api\\LocationCityController', $container));

        return $instance;
    }
}
