<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esgWeightModel extends Model
{
    use HasFactory;
    protected $table = "weights";
    protected $connection = 'esg';

    protected $fillable = [
        'code',
        'c_1',
        'c_2',
        'c_4',
        'c_5',
        'c_6',
        'c_7',
        'c_8',
        'c_9',
        'c_10',
        'c_11',
        'c_13',
        'c_14',
        'c_15',
        'c_16',
        'c_17',
        'c_18',
        'created_at',
        'updated_at',
    ];
}
