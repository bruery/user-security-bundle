<?php

namespace Bruery\AdminBundle;

use Bruery\AdminBundle\DependencyInjection\Compiler\OverrideCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdminBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new OverrideCompilerPass());
    }
}
