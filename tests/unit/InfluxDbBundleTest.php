<?php

namespace Algatux\InfluxDbBundle\unit;

use Algatux\InfluxDbBundle\DependencyInjection\InfluxDbExtension;
use Algatux\InfluxDbBundle\InfluxDbBundle;
use Matthias\SymfonyDependencyInjectionTest\PhpUnit\AbstractContainerBuilderTestCase;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class InfluxDbBundleTest extends AbstractContainerBuilderTestCase
{
    /**
     * @var InfluxDbBundle
     */
    protected $bundle;

    protected function setUp()
    {
        parent::setUp();

        $this->bundle = new InfluxDbBundle();
    }

    public function test_build()
    {
        $this->assertInstanceOf(Bundle::class, $this->bundle);
        $this->assertInstanceOf(InfluxDbExtension::class, $this->bundle->getContainerExtension());
        $this->bundle->build($this->container);
    }
}
