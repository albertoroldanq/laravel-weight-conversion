<?php

namespace Albertoroldanq\WeightConversion\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightUnit extends Model
{
    use HasFactory;

    public $guarded = [];

    public function getUppercaseName(): string
    {
        return strtoupper($this->name);
    }
}
