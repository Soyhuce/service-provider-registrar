<?php

namespace Soyhuce\ServiceProviderRegistrar\Tests\Feature;

use Orchestra\Testbench\TestCase;
use Soyhuce\ServiceProviderRegistrar\Tests\Fixtures\LocalServiceProvider;
use Soyhuce\ServiceProviderRegistrar\Tests\Fixtures\Registrar;
use Soyhuce\ServiceProviderRegistrar\Tests\Fixtures\TestingServiceProvider;

class ServiceProviderTest extends TestCase
{
    protected function tearDown(): void
    {
        TestingServiceProvider::$registered = false;
        TestingServiceProvider::$booted = false;
        LocalServiceProvider::$registered = false;
        LocalServiceProvider::$booted = false;
        parent::tearDown();
    }

    /**
     * @test
     */
    public function serviceProvidersAreCorrectlyRegisteredOnTesting(): void
    {
        app()->detectEnvironment(static fn () => 'testing');
        app()->register(Registrar::class);

        $this->assertTrue(app()->environment('testing'));

        $this->assertTrue(TestingServiceProvider::$registered);
        $this->assertTrue(TestingServiceProvider::$booted);

        $this->assertFalse(LocalServiceProvider::$registered);
        $this->assertFalse(LocalServiceProvider::$booted);
    }

    /**
     * @test
     */
    public function serviceProvidersAreCorrectlyRegisteredOnLocal(): void
    {
        app()->detectEnvironment(static fn () => 'local');
        app()->register(Registrar::class);

        $this->assertTrue(app()->environment('local'));

        $this->assertFalse(TestingServiceProvider::$registered);
        $this->assertFalse(TestingServiceProvider::$booted);

        $this->assertTrue(LocalServiceProvider::$registered);
        $this->assertTrue(LocalServiceProvider::$booted);
    }

    /**
     * @test
     */
    public function serviceProvidersAreNotRegisteredOnProduction(): void
    {
        app()->detectEnvironment(static fn () => 'production');
        app()->register(Registrar::class);

        $this->assertTrue(app()->environment('production'));

        $this->assertFalse(TestingServiceProvider::$registered);
        $this->assertFalse(TestingServiceProvider::$booted);

        $this->assertFalse(LocalServiceProvider::$registered);
        $this->assertFalse(LocalServiceProvider::$booted);
    }
}
