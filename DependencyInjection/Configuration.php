<?php

namespace Gtt\Bundle\DoctrineAdapterBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $treeBuilder
            ->root('doctrine_auditable')
                ->children()
                    ->scalarNode('deleted_value')->defaultValue('')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}