<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_GVkmJLwService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.gVkmJLw' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.gVkmJLw'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'WebHook' => ['privates', '.errored..service_locator.gVkmJLw.Plugin\\Api42\\Entity\\WebHook', NULL, 'Cannot autowire service ".service_locator.gVkmJLw": it references class "Plugin\\Api42\\Entity\\WebHook" but no such service exists.'],
        ], [
            'WebHook' => 'Plugin\\Api42\\Entity\\WebHook',
        ]);
    }
}
