<?php declare(strict_types=1);

namespace Soyhuce\ServiceProviderRegistrar\Tests\Fixtures;

use Illuminate\Support\ServiceProvider;

class TestingServiceProvider extends ServiceProvider
{
    use TracesRegistration;
}
