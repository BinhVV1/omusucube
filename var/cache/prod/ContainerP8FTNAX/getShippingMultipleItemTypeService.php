<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getShippingMultipleItemTypeService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Form\Type\ShippingMultipleItemType' shared autowired service.
     *
     * @return \Eccube\Form\Type\ShippingMultipleItemType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'form'.\DIRECTORY_SEPARATOR.'AbstractType.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Form'.\DIRECTORY_SEPARATOR.'Type'.\DIRECTORY_SEPARATOR.'ShippingMultipleItemType.php';

        return $container->privates['Eccube\\Form\\Type\\ShippingMultipleItemType'] = new \Eccube\Form\Type\ShippingMultipleItemType(($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->services['.container.private.session'] ?? $container->get_Container_Private_SessionService()), ($container->services['.container.private.security.authorization_checker'] ?? $container->get_Container_Private_Security_AuthorizationCheckerService()), ($container->services['.container.private.security.token_storage'] ?? $container->get_Container_Private_Security_TokenStorageService()), ($container->privates['Eccube\\Repository\\Master\\PrefRepository'] ?? $container->load('getPrefRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Service\\OrderHelper'] ?? $container->load('getOrderHelperService')));
    }
}
