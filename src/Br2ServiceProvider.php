<?php

namespace Greenheron\Br2;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Greenheron\Br2\Commands\Br2Command;

class Br2ServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('br2')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_br2_table')
            ->hasCommand(Br2Command::class);
    }
}
