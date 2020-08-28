<?php

namespace Soyhuce\ServiceProviderRegistrar\Tests\Fixtures;

use Illuminate\Support\ServiceProvider;

class TestingServiceProvider extends ServiceProvider
{
    use TracesRegistration;
}
