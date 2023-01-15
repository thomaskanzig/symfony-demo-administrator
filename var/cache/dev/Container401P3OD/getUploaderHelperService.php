<?php

namespace Container401P3OD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUploaderHelperService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\UploaderHelper' shared autowired service.
     *
     * @return \App\Service\UploaderHelper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/UploaderHelper.php';

        return $container->privates['App\\Service\\UploaderHelper'] = new \App\Service\UploaderHelper('uploads/media', \dirname(__DIR__, 4), ($container->privates['filesystem'] ?? ($container->privates['filesystem'] = new \Symfony\Component\Filesystem\Filesystem())), $container->getEnv('BASE_URL'), ['bucket' => $container->getEnv('DOS_BUCKET'), 'endpoint' => $container->getEnv('DOS_ENDPOINT'), 'key' => $container->getEnv('DOS_CREDENTIAL_KEY'), 'secret' => $container->getEnv('DOS_CREDENTIAL_SECRET'), 'domain' => $container->getEnv('DOS_DOMAIN')], ($container->services['translator'] ?? $container->getTranslatorService()));
    }
}