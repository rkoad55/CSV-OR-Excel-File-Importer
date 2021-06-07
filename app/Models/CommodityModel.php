<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommodityModel extends Model
{
    use HasFactory;
    protected $table = "commodity";
    protected $fillable = [
        'category_id',
        'category',
        'name_id',
        'name',
        'price',
        'date',
    ];
}
