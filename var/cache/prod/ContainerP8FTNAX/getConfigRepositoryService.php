<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConfigRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Plugin\Securitychecker42\Repository\ConfigRepository' shared autowired service.
     *
     * @return \Plugin\Securitychecker42\Repository\ConfigRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'app'.\DIRECTORY_SEPARATOR.'Plugin'.\DIRECTORY_SEPARATOR.'Securitychecker42'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'ConfigRepository.php';

        return $container->privates['Plugin\\Securitychecker42\\Repository\\ConfigRepository'] = new \Plugin\Securitychecker42\Repository\ConfigRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
