<?php declare(strict_types=1);

namespace Soyhuce\ServiceProviderRegistrar;

use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

abstract class ServiceProvider extends IlluminateServiceProvider
{
    public function register(): void
    {
        $environment = (string) $this->app->environment();

        foreach (data_get($this, $environment, []) as $serviceProvider) {
            $this->app->register($serviceProvider);
        }
    }
}
