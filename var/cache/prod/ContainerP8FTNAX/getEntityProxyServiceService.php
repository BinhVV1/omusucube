<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEntityProxyServiceService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Service\EntityProxyService' shared autowired service.
     *
     * @return \Eccube\Service\EntityProxyService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'EntityProxyService.php';

        return $container->privates['Eccube\\Service\\EntityProxyService'] = new \Eccube\Service\EntityProxyService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), $container);
    }
}