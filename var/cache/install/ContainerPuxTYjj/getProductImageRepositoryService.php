<?php

namespace ContainerPuxTYjj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductImageRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\ProductImageRepository' shared autowired service.
     *
     * @return \Eccube\Repository\ProductImageRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ProductImageRepository.php';

        return $container->privates['Eccube\\Repository\\ProductImageRepository'] = new \Eccube\Repository\ProductImageRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
