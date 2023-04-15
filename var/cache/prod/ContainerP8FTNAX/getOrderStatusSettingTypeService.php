<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getOrderStatusSettingTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\Admin\OrderStatusSettingType' shared autowired service.
     *
     * @return \Eccube\Form\Type\Admin\OrderStatusSettingType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'OrderStatusSettingType.php';

        return $container->privates['Eccube\\Form\\Type\\Admin\\OrderStatusSettingType'] = new \Eccube\Form\Type\Admin\OrderStatusSettingType(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->privates['Eccube\\Repository\\Master\\OrderStatusColorRepository'] ?? $container->load('getOrderStatusColorRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\CustomerOrderStatusRepository'] ?? $container->load('getCustomerOrderStatusRepositoryService')));
    }
}
