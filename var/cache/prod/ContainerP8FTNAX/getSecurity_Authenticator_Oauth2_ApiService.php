<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Oauth2_ApiService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'security.authenticator.oauth2.api' shared service.
     *
     * @return \League\Bundle\OAuth2ServerBundle\Security\Authenticator\OAuth2Authenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'ForwardCompatAuthenticatorTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'OAuth2Authenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ResourceServer.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-server'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CryptKey.php';

        $a = ($container->privates['league.oauth2_server.repository.access_token'] ?? $container->load('getLeague_Oauth2Server_Repository_AccessTokenService'));

        if (isset($container->privates['security.authenticator.oauth2.api'])) {
            return $container->privates['security.authenticator.oauth2.api'];
        }

        return $container->privates['security.authenticator.oauth2.api'] = new \League\Bundle\OAuth2ServerBundle\Security\Authenticator\OAuth2Authenticator(($container->privates['league.oauth2_server.factory.psr_http'] ?? $container->load('getLeague_Oauth2Server_Factory_PsrHttpService')), new \League\OAuth2\Server\ResourceServer($a, new \League\OAuth2\Server\CryptKey($container->getEnv('ECCUBE_OAUTH2_RESOURCE_SERVER_PUBLIC_KEY'), NULL, false)), ($container->privates['Eccube\\Security\\Core\\User\\MemberProvider'] ?? $container->load('getMemberProviderService')), 'ROLE_OAUTH2_');
    }
}
