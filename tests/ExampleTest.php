<?php

use Albertoroldanq\WeightConversion\Commands\WeightConversionCommand;
use Albertoroldanq\WeightConversion\WeightUnit;
use Symfony\Component\Console\Command\Command;

use function Pest\Laravel\artisan;
use function Pest\Laravel\assertDatabaseHas;

it('can run a command', function () {
    artisan(WeightConversionCommand::class)->assertExitCode(Command::SUCCESS);
});

it('can return uppercased value of a name', function () {
    WeightUnit::factory()->create();

    assertDatabaseHas('weight_units',
        [
            'name' => 'Kilogram',
            'symbol' => 'kg',
            'measurement_system' => 'metric',
        ]
    );

});
