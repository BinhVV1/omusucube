<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoginHistoryRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\LoginHistoryRepository' shared autowired service.
     *
     * @return \Eccube\Repository\LoginHistoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'LoginHistoryRepository.php';

        return $container->privates['Eccube\\Repository\\LoginHistoryRepository'] = new \Eccube\Repository\LoginHistoryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()), ($container->privates['Eccube\\Doctrine\\Query\\Queries'] ?? ($container->privates['Eccube\\Doctrine\\Query\\Queries'] = new \Eccube\Doctrine\Query\Queries())));
    }
}
