<?php

namespace Albertoroldanq\WeightConversion\Tests;

use Albertoroldanq\WeightConversion\WeightConversionServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Schema;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Albertoroldanq\\WeightConversion\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            WeightConversionServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        Schema::dropAllTables();
        config()->set('database.default', 'testing');

        $migration = include __DIR__.'/../database/migrations/create_weight_conversion_table.php.stub';
        $migration->up();
    }
}
