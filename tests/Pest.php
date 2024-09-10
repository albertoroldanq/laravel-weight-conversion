<?php

use Albertoroldanq\WeightConversion\Tests\TestCase;

uses(TestCase::class)
    ->beforeEach(function() {
        Route::weightConversion();
    })
    ->in(__DIR__);
