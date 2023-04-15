<?php

namespace ContainerPuxTYjj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSystemControllerService extends Eccube_KernelInstallContainer
{
    /*
     * Gets the public 'Eccube\Controller\Admin\Setting\System\SystemController' shared autowired service.
     *
     * @return \Eccube\Controller\Admin\Setting\System\SystemController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'Admin'.\DIRECTORY_SEPARATOR.'Setting'.\DIRECTORY_SEPARATOR.'System'.\DIRECTORY_SEPARATOR.'SystemController.php';

        return $container->services['Eccube\\Controller\\Admin\\Setting\\System\\SystemController'] = new \Eccube\Controller\Admin\Setting\System\SystemController(($container->services['Eccube\\Service\\SystemService'] ?? $container->load('getSystemServiceService')));
    }
}
