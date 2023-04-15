<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductStatusRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\ProductStatusRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\ProductStatusRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'ProductStatusRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\ProductStatusRepository'] = new \Eccube\Repository\Master\ProductStatusRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
