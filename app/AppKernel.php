<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),

            //new Knp\Rad\ResourceResolver\Bundle\ResourceResolverBundle(),
            //new Knp\Rad\DoctrineEvent\Bundle\DoctrineEventBundle(),
            //new Knp\Rad\FixturesLoad\Bundle\FixturesLoadBundle(),
            //new Knp\Rad\AutoRegistration\Bundle\AutoRegistrationBundle($this), // !! Do not forget to inject the kernel !!
            //new Knp\Rad\User\Bundle\UserBundle(),
            //new Knp\Rad\DomainEvent\Bundle\DomainEventBundle(),
            //new Knp\Rad\UrlGeneration\Bundle\UrlGenerationBundle(),

            new Avanzu\AdminThemeBundle\AvanzuAdminThemeBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),

            new Ob\HighchartsBundle\ObHighchartsBundle(),
            new FOS\ElasticaBundle\FOSElasticaBundle(),

          // These are the other bundles the SonataAdminBundle relies on
            //new Sonata\CoreBundle\SonataCoreBundle(),
            //new Sonata\BlockBundle\SonataBlockBundle(),
            //new Knp\Bundle\MenuBundle\KnpMenuBundle(),

            // And finally, the storage and SonataAdminBundle
            //new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
            //new Sonata\AdminBundle\SonataAdminBundle(),

            new AppBundle\AppBundle(),
        ];

        if (in_array($this->getEnvironment(), ['dev', 'test'], true)) {
            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();

            $bundles[] = new Nelmio\Alice\Bridge\Symfony\NelmioAliceBundle();
            $bundles[] = new Fidry\AliceDataFixtures\Bridge\Symfony\FidryAliceDataFixturesBundle();
            $bundles[] = new Hautelook\AliceBundle\HautelookAliceBundle();
        }

        return $bundles;
    }

    public function getRootDir()
    {
        return __DIR__;
    }

    public function getCacheDir()
    {
        return dirname(__DIR__).'/var/cache/'.$this->getEnvironment();
    }

    public function getLogDir()
    {
        return dirname(__DIR__).'/var/logs';
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
