<?php

namespace Albertoroldanq\WeightConversion\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Albertoroldanq\WeightConversion\WeightConversion
 */
class WeightConversion extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Albertoroldanq\WeightConversion\WeightConversion::class;
    }
}
