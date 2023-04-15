<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserResolveListenerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\Api42\EventListener\UserResolveListener' shared service.
     *
     * @return \Plugin\Api42\EventListener\UserResolveListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'EventListener'.\DIRECTORY_SEPARATOR.'UserResolveListener.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'UserPasswordEncoderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Api42'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Core'.\DIRECTORY_SEPARATOR.'Encoder'.\DIRECTORY_SEPARATOR.'UserPasswordEncoder.php';

        return $container->privates['Plugin\\Api42\\EventListener\\UserResolveListener'] = new \Plugin\Api42\EventListener\UserResolveListener(($container->privates['Eccube\\Security\\Core\\User\\MemberProvider'] ?? $container->load('getMemberProviderService')), new \Plugin\Api42\Security\Core\Encoder\UserPasswordEncoder(($container->privates['Eccube\\Security\\Core\\Encoder\\PasswordEncoder'] ?? $container->load('getPasswordEncoderService'))));
    }
}
