<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esgPattrenModel extends Model
{
    use HasFactory;
    protected $table = "pattren";
    protected $connection = 'esg';

    protected $fillable = [
        'code',
        'pillar',
        'factor',
        'subfactor',
        'indicator',
        'type',
        'unit',
        'scale',
        'bloomberg_ticker',
        'apply',
        'subheading',
        'label',
        'sign',
    ];
}
