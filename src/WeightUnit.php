<?php

namespace Albertoroldanq\WeightConversion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WeightUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'symbol',
        'measurement_system',
    ];
}
