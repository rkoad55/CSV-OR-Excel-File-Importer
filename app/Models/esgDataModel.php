<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esgDataModel extends Model
{
    use HasFactory;
    protected $table = "data";
    protected $connection = 'esg';

    protected $fillable = [
        'code',
        'revenue_type',
        'currency_code',
        'ending_month',
        'company_id',
        '2015_data',
        '2016_data',
        '2017_data',
        '2018_data',
        '2019_data',
        '2020_data',
        'last',
        'cluster_id',
        'created_at',
        'updated_at',
    ];
}
