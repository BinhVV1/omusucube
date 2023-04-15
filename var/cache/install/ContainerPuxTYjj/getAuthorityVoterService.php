<?php

namespace ContainerPuxTYjj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAuthorityVoterService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Security\Voter\AuthorityVoter' shared autowired service.
     *
     * @return \Eccube\Security\Voter\AuthorityVoter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'VoterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Voter'.\DIRECTORY_SEPARATOR.'AuthorityVoter.php';

        return $container->privates['Eccube\\Security\\Voter\\AuthorityVoter'] = new \Eccube\Security\Voter\AuthorityVoter(($container->privates['Eccube\\Repository\\AuthorityRoleRepository'] ?? $container->load('getAuthorityRoleRepositoryService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}
