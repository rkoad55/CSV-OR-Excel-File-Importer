<?php

namespace App\Models;

use App\Models\esgCurrencyModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esgCurrencyModel extends Model
{
    use HasFactory;
    protected $table = "currency";
    protected $connection = 'esg';

    protected $fillable = [
        'type',
        'ending',
        'year',
        'EUR',
        'PKR',
        'CNY',
        'INR',
        'HKD',
        'ZAR',
        'IDR',
        'KRW',
        'MYR',
        'PHP',
        'TWD',
        'THB',
        'VND',
        'SAR',
        'ARS',
        'HUF',
        'KWD',
        'MXN',
        'PLN',
        'BRL',
        'QAR',
        'RUB',
        'CLP',
        'TRY',
        'created_at',
        'updated_at',
    ];

}
