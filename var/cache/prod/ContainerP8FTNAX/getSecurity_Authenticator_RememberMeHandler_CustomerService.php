<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMeHandler_CustomerService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.remember_me_handler.customer' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'RememberMe'.\DIRECTORY_SEPARATOR.'RememberMeHandlerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'RememberMe'.\DIRECTORY_SEPARATOR.'AbstractRememberMeHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'RememberMe'.\DIRECTORY_SEPARATOR.'SignatureRememberMeHandler.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Signature'.\DIRECTORY_SEPARATOR.'SignatureHasher.php';

        $a = ($container->privates['Eccube\\Security\\Core\\User\\CustomerProvider'] ?? $container->load('getCustomerProviderService'));

        if (isset($container->privates['security.authenticator.remember_me_handler.customer'])) {
            return $container->privates['security.authenticator.remember_me_handler.customer'];
        }

        return $container->privates['security.authenticator.remember_me_handler.customer'] = new \Symfony\Component\Security\Http\RememberMe\SignatureRememberMeHandler(new \Symfony\Component\Security\Core\Signature\SignatureHasher(($container->privates['property_accessor'] ?? $container->load('getPropertyAccessorService')), [0 => 'password'], $container->getEnv('ECCUBE_AUTH_MAGIC'), NULL, NULL), $a, ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ['secret' => $container->getEnv('ECCUBE_AUTH_MAGIC'), 'lifetime' => 3600, 'name' => 'eccube_remember_me', 'remember_me_parameter' => 'login_memory', 'secure' => NULL, 'user_providers' => [], 'catch_exceptions' => true, 'signature_properties' => [0 => 'password'], 'path' => '/', 'domain' => NULL, 'httponly' => true, 'samesite' => NULL, 'always_remember_me' => false], ($container->privates['monolog.logger.security'] ?? $container->getMonolog_Logger_SecurityService()));
    }
}
