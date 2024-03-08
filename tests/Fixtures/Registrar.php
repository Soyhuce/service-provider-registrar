<?php declare(strict_types=1);

namespace Soyhuce\ServiceProviderRegistrar\Tests\Fixtures;

use Soyhuce\ServiceProviderRegistrar\ServiceProvider;

class Registrar extends ServiceProvider
{
    public array $testing = [TestingServiceProvider::class];

    public array $local = [LocalServiceProvider::class];
}
