<?php

namespace Albertoroldanq\WeightConversion;

use Albertoroldanq\WeightConversion\Commands\WeightConversionCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasMigration('create_weight_conversion_table')
            ->hasCommand(WeightConversionCommand::class);
    }
}
