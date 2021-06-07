<?php

namespace App\Imports;

use App\Models\VehicleModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class VehicleImport implements ToModel, WithStartRow
{
    public $type_id;
    public $company_id;
    public $brand_id;
    public $vehicle_id;
    public function __construct($type_id, $company_id, $brand_id, $vehicle_id)
    {
        $this->type_id = $type_id;
        $this->company_id = $company_id;
        $this->brand_id = $brand_id;
        $this->vehicle_id = $vehicle_id;

    }

    public function model(array $row)
    {
        // dd($this->type_id, $this->company_id, $this->brand_id, $this->vehicle_id, $row);
        return new VehicleModel([
            'type_id' => $this->type_id,
            'company_id' => $this->company_id,
            'brand_id' => $this->brand_id,
            'vehicle_id' => $this->vehicle_id,
            'date' => $row[0],
            'production' => (!strlen($row[1]) ? '0' : $row[1]),
            'sale' => (!strlen($row[2]) ? '0' : $row[2]),
        ]);

    }
    public function startRow(): int
    {
        return 6;
    }
}
