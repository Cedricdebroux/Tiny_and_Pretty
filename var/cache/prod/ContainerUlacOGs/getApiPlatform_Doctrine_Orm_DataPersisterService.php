<?php

namespace ContainerUlacOGs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_DataPersisterService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.doctrine.orm.data_persister' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.doctrine.orm.data_persister'] = new \ApiPlatform\Core\Bridge\Doctrine\Common\DataPersister(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
