<?php

use Albertoroldanq\WeightConversion\Commands\WeightConversionCommand;
use Symfony\Component\Console\Command\Command;

use function Pest\Laravel\artisan;

it('can output the configured value', function () {
    artisan(WeightConversionCommand::class)
        ->expectsOutput(config('weight-conversion.command_output'))
        ->assertExitCode(Command::SUCCESS);
});

it('can output another value', function () {
    config()->set('weight-conversion.command_output', 'something else');
    artisan(WeightConversionCommand::class)
        ->expectsOutput('something else')
        ->assertExitCode(Command::SUCCESS);
});
