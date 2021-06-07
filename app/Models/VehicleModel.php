<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleModel extends Model
{
    use HasFactory;
    protected $table = "vehicle_data";
    protected $fillable = [
        'date',
        'production',
        'sale',
        'type_id',
        'company_id',
        'brand_id',
        'vehicle_id',
    ];
}
