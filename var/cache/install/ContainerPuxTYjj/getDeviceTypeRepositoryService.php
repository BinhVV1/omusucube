<?php

namespace ContainerPuxTYjj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDeviceTypeRepositoryService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the private 'Eccube\Repository\Master\DeviceTypeRepository' shared autowired service.
     *
     * @return \Eccube\Repository\Master\DeviceTypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'Master'.\DIRECTORY_SEPARATOR.'DeviceTypeRepository.php';

        return $container->privates['Eccube\\Repository\\Master\\DeviceTypeRepository'] = new \Eccube\Repository\Master\DeviceTypeRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
