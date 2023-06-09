<?php

namespace ContainerPuxTYjj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurityTypeService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\SecurityType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\SecurityType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'SecurityType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\SecurityType'] = new \Eccube\Form\Type\Admin\SecurityType(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->services['.container.private.validator'] ?? $container->get_Container_Private_ValidatorService()), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
