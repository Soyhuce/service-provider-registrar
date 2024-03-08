<?php declare(strict_types=1);

namespace Soyhuce\ServiceProviderRegistrar\Tests\Fixtures;

trait TracesRegistration
{
    public static bool $registered = false;

    public static bool $booted = false;

    public function register(): void
    {
        static::$registered = true;
    }

    public function boot(): void
    {
        static::$booted = true;
    }
}
