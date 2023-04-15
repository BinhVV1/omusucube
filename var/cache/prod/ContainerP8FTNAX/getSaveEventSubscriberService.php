<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSaveEventSubscriberService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Doctrine\EventSubscriber\SaveEventSubscriber' shared autowired service.
     *
     * @return \Eccube\Doctrine\EventSubscriber\SaveEventSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'event-manager'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'EventSubscriber.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'EventSubscriber'.\DIRECTORY_SEPARATOR.'SaveEventSubscriber.php';

        return $container->privates['Eccube\\Doctrine\\EventSubscriber\\SaveEventSubscriber'] = new \Eccube\Doctrine\EventSubscriber\SaveEventSubscriber(($container->privates['Eccube\\Request\\Context'] ?? $container->getContextService()), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}
