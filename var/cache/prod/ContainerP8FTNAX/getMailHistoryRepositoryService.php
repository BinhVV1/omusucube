<?php

namespace ContainerP8FTNAX;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMailHistoryRepositoryService extends Eccube_KernelProdContainer
{
    /*
     * Gets the private 'Eccube\Repository\MailHistoryRepository' shared autowired service.
     *
     * @return \Eccube\Repository\MailHistoryRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Eccube'.\DIRECTORY_SEPARATOR.'Repository'.\DIRECTORY_SEPARATOR.'MailHistoryRepository.php';

        return $container->privates['Eccube\\Repository\\MailHistoryRepository'] = new \Eccube\Repository\MailHistoryRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
