<?php

namespace App\Imports;

use App\Models\CommodityModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class CommodityImport implements ToModel, WithStartRow
{
    public $category_id;
    public $name_id;
    public $category;
    public $name;
    public function __construct($category_id, $name_id, $category, $name)
    {
        $this->category_id = $category_id;
        $this->name_id = $name_id;
        $this->category = $category;
        $this->name = $name;

    }

    public function model(array $row)
    {
        //dd($row);
        return new CommodityModel([
            'category_id' => $this->category_id,
            'name_id' => $this->name_id,
            'category' => $this->category,
            'name' => $this->name,
            'date' => $row[0],
            'price' => (!strlen($row[1]) ? '#N/A N/A' : $row[1]),
        ]);

    }
    public function startRow(): int
    {
        return 9;
    }
}
