<?php

use Albertoroldanq\WeightConversion\Models\WeightUnit;

use function Pest\Laravel\assertDatabaseHas;

it('can return the uppercased value of a name', function () {

    /** @var WeightUnit $weightUnit */
    $weightUnit = WeightUnit::factory()->create(['name' => 'Kilogram']);

    expect($weightUnit->getUppercaseName())->toEqual('KILOGRAM');
});
