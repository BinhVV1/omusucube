<?php

namespace ContainerPuxTYjj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Alm9R0eService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private '.service_locator.alm9R0e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.alm9R0e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'shipping' => ['privates', '.errored..service_locator.alm9R0e.Eccube\\Entity\\Shipping', NULL, 'Cannot autowire service ".service_locator.alm9R0e": it references class "Eccube\\Entity\\Shipping" but no such service exists.'],
        ], [
            'shipping' => 'Eccube\\Entity\\Shipping',
        ]);
    }
}
