<?php

namespace ContainerUlacOGs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Doctrine_Orm_QueryExtension_OrderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'api_platform.doctrine.orm.query_extension.order' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.doctrine.orm.query_extension.order'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension('ASC', ($container->privates['api_platform.metadata.resource.metadata_factory.cached'] ?? $container->getApiPlatform_Metadata_Resource_MetadataFactory_CachedService()));
    }
}
