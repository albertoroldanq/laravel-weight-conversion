<?php

namespace Albertoroldanq\WeightConversion;

use Albertoroldanq\WeightConversion\Commands\WeightConversionCommand;
use Albertoroldanq\WeightConversion\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
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
            ->hasConfigFile('weight-conversion')
            ->hasViews()
            ->hasMigration('create_weight_conversion_table')
            ->hasCommand(WeightConversionCommand::class);
    }

    public function packageRegistered()
    {
        Route::macro('weightConversion', function (string $baseUrl = 'weight-conversion') {
            Route::prefix($baseUrl)->group(function () {
                Route::get('/', [MyController::class, 'index']);
            });
        });
    }

    // in the project
    //    Route::weightConversion(); // /weight-conversion
    //    Route::weightConversion('custom-route'); // /custom-route
}
