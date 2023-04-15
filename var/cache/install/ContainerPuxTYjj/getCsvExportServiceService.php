<?php

namespace ContainerPuxTYjj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCsvExportServiceService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Service\CsvExportService' shared autowired service.
     *
     * @return \Eccube\Service\CsvExportService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'CsvExportService.php';

        return $container->privates['Eccube\\Service\\CsvExportService'] = new \Eccube\Service\CsvExportService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->privates['Eccube\\Repository\\CsvRepository'] ?? $container->load('getCsvRepositoryService')), ($container->privates['Eccube\\Repository\\Master\\CsvTypeRepository'] ?? $container->load('getCsvTypeRepositoryService')), ($container->privates['Eccube\\Repository\\OrderRepository'] ?? $container->getOrderRepositoryService()), ($container->privates['Eccube\\Repository\\ShippingRepository'] ?? $container->load('getShippingRepositoryService')), ($container->privates['Eccube\\Repository\\CustomerRepository'] ?? $container->load('getCustomerRepositoryService')), ($container->privates['Eccube\\Repository\\ProductRepository'] ?? $container->getProductRepositoryService()), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), ($container->services['.container.private.form.factory'] ?? $container->load('get_Container_Private_Form_FactoryService')), ($container->services['knp_paginator'] ?? $container->load('getKnpPaginatorService')));
    }
}
