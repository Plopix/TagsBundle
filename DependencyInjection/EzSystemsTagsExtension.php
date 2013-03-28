<?php

namespace EzSystems\TagsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * This is the class that loads and manages the bundle configuration
 */
class EzSystemsTagsExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load( array $configs, ContainerBuilder $container )
    {
        $loader = new YamlFileLoader( $container, new FileLocator( __DIR__ . "/../Resources/config" ) );

        $loader->load( "fieldtypes.yml" );
        $loader->load( "storage_engines.yml" );
        $loader->load( "papi.yml" );
    }
}
