<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoadDataFixturesEccubeCommandService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Command\LoadDataFixturesEccubeCommand' shared autowired service.
     *
     * @return \Eccube\Command\LoadDataFixturesEccubeCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'doctrine-bundle'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'DoctrineCommand.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LoadDataFixturesEccubeCommand.php';

        $container->privates['Eccube\\Command\\LoadDataFixturesEccubeCommand'] = $instance = new \Eccube\Command\LoadDataFixturesEccubeCommand(($container->services['doctrine'] ?? $container->getDoctrineService()), $container);

        $instance->setName('eccube:fixtures:load');

        return $instance;
    }
}
