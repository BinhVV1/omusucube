<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getExceptionListenerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\EventListener\ExceptionListener' shared autowired service.
     *
     * @return \Eccube\EventListener\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'ExceptionListener.php';

        $a = ($container->services['.container.private.twig'] ?? $container->get_Container_Private_TwigService());

        if (isset($container->privates['Eccube\\EventListener\\ExceptionListener'])) {
            return $container->privates['Eccube\\EventListener\\ExceptionListener'];
        }

        return $container->privates['Eccube\\EventListener\\ExceptionListener'] = new \Eccube\EventListener\ExceptionListener($a, ($container->privates['Eccube\\Request\\Context'] ?? $container->getContextService()));
    }
}