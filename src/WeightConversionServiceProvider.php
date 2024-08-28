<?php

namespace Albertoroldanq\WeightConversion;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Albertoroldanq\WeightConversion\Commands\WeightConversionCommand;

class WeightConversionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-weight-conversion')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_weight_conversion_table')
            ->hasCommand(WeightConversionCommand::class);
    }
}
