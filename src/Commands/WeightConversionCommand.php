<?php

namespace Albertoroldanq\WeightConversion\Commands;

use Illuminate\Console\Command;

class WeightConversionCommand extends Command
{
    public $signature = 'laravel-weight-conversion';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
