<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHTMLPurifierTextTypeExtensionService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Extension\HTMLPurifierTextTypeExtension' shared autowired service.
     *
     * @return \Eccube\Form\Extension\HTMLPurifierTextTypeExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeExtensionInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractTypeExtension.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Extension'.\DIRECTORY_SEPARATOR.'HTMLPurifierTextTypeExtension.php';

        return $container->privates['Eccube\\Form\\Extension\\HTMLPurifierTextTypeExtension'] = new \Eccube\Form\Extension\HTMLPurifierTextTypeExtension(($container->privates['Eccube\\Request\\Context'] ?? $container->getContextService()));
    }
}
