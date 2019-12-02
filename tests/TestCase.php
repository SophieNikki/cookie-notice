<?php

namespace Damcclean\CookieNotice\Tests;

use Damcclean\CookieNotice\ServiceProvider;
use Statamic\Providers\StatamicServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Statamic\Statamic;

abstract class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [
            StatamicServiceProvider::class,
            ServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Statamic' => Statamic::class
        ];
    }
}
