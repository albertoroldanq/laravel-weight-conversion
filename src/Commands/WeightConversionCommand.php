<?php

namespace Albertoroldanq\WeightConversion\Commands;

use Illuminate\Console\Command;

class WeightConversionCommand extends Command
{
    public $signature = 'laravel-weight-conversion';

    public $description = 'My command';

    public function handle(): int
    {
        $text = config('weight-conversion.command_output');
        $this->comment($text);

        return self::SUCCESS;
    }
}
