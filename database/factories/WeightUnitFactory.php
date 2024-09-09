<?php

namespace Albertoroldanq\WeightConversion\Database\Factories;

use Albertoroldanq\WeightConversion\WeightUnit;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeightUnitFactory extends Factory
{
    protected $model = WeightUnit::class;

    public function definition()
    {
        return [
            'name' => 'Kilogram',
            'symbol' => 'kg',
            'measurement_system' => 'metric',
        ];
    }
}
