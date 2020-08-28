<?php

namespace Soyhuce\ServiceProviderRegistrar\Tests\Fixtures;

use Illuminate\Support\ServiceProvider;

class LocalServiceProvider extends ServiceProvider
{
    use TracesRegistration;
}
