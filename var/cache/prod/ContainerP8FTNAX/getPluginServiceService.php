<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPluginServiceService extends Eccube_KernelProdContainer
{
    /*
     * Gets the public 'Eccube\Service\PluginService' shared autowired service.
     *
     * @return \Eccube\Service\PluginService
     */
    public static function do($container, $lazyLoad = true)
    {
        if ($lazyLoad) {
            return $container->services['Eccube\\Service\\PluginService'] = $container->createProxy('PluginService_e75fd88', function () use ($container) {
                return \PluginService_e75fd88::staticProxyConstructor(function (&$wrappedInstance, \ProxyManager\Proxy\LazyLoadingInterface $proxy) use ($container) {
                    $wrappedInstance = self::do($container, false);

                    $proxy->setProxyInitializer(null);

                    return true;
                });
            });
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PluginService.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'CacheUtil.php';

        return new \Eccube\Service\PluginService(($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['Eccube\\Repository\\PluginRepository'] ?? $container->load('getPluginRepositoryService')), ($container->privates['Eccube\\Service\\EntityProxyService'] ?? $container->load('getEntityProxyServiceService')), ($container->privates['Eccube\\Service\\SchemaService'] ?? $container->load('getSchemaServiceService')), ($container->services['Eccube\\Common\\EccubeConfig'] ?? ($container->services['Eccube\\Common\\EccubeConfig'] = new \Eccube\Common\EccubeConfig($container))), $container, ($container->privates['Eccube\\Util\\CacheUtil'] ?? ($container->privates['Eccube\\Util\\CacheUtil'] = new \Eccube\Util\CacheUtil(($container->services['kernel'] ?? $container->get('kernel', 1)), $container))), ($container->privates['Eccube\\Service\\Composer\\ComposerServiceInterface'] ?? $container->load('getComposerServiceInterfaceService')), ($container->privates['Eccube\\Service\\PluginApiService'] ?? $container->load('getPluginApiServiceService')), ($container->services['Eccube\\Service\\SystemService'] ?? $container->getSystemServiceService()), ($container->privates['Eccube\\Service\\PluginContext'] ?? $container->load('getPluginContextService')));
    }
}
