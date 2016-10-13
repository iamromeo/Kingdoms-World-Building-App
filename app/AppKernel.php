<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
            new FOS\UserBundle\FOSUserBundle(),
            new FOS\RestBundle\FOSRestBundle(),
            new JMS\SerializerBundle\JMSSerializerBundle(),
            new Braincrafted\Bundle\BootstrapBundle\BraincraftedBootstrapBundle(),
            new Knp\Bundle\MenuBundle\KnpMenuBundle(),
            new Hip\MandrillBundle\HipMandrillBundle(),
            new RobertoTru\ToInlineStyleEmailBundle\RobertoTruToInlineStyleEmailBundle(),
            new Bmatzner\LeafletBundle\BmatznerLeafletBundle(),
            new Tools\Bundle\NamegeneratorBundle\ToolsNamegeneratorBundle(),
            new Portal\Bundle\PublicBundle\PortalPublicBundle(),
            new Common\Bundle\EntitiesBundle\CommonEntitiesBundle(),
            new Account\Bundle\UserBundle\AccountUserBundle(),
            new Common\Bundle\EmailBundle\CommonEmailBundle(),
            new Common\Bundle\MapBundle\CommonMapBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }

    // public function getCacheDir()
    // {
    //     if (in_array($this->environment, array('dev', 'test'))) {
    //         return '/dev/shm/kingdoms/cache/' .  $this->environment;
    //     }

    //     return parent::getCacheDir();
    // }

    // public function getLogDir()
    // {
    //     if (in_array($this->environment, array('dev', 'test'))) {
    //         return '/dev/shm/kingdoms/logs';
    //     }

    //     return parent::getLogDir();
    // }

}
