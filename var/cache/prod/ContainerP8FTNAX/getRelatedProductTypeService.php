<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRelatedProductTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\RelatedProduct42\Form\Type\Admin\RelatedProductType' shared autowired service.
     *
     * @return \Plugin\RelatedProduct42\Form\Type\Admin\RelatedProductType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'RelatedProduct42'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'RelatedProductType.php';

        return $container->privates['Plugin\\RelatedProduct42\\Form\\Type\\Admin\\RelatedProductType'] = new \Plugin\RelatedProduct42\Form\Type\Admin\RelatedProductType(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))));
    }
}
