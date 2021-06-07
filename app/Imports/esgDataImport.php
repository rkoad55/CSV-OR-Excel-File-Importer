<?php

namespace App\Imports;

use App\Models\esgDataModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class esgDataImport implements ToModel, WithStartRow
{

    public function __construct()
    {

    }

    public function model(array $row)
    {
        // dd($row);
        $values = new esgDataModel([
            'code' => (!strlen($row[0]) ? null : trim($row[0])),
            'revenue_type' => (!strlen($row[1]) ? null : trim($row[1])),
            'currency_code' => (!strlen($row[2]) ? null : trim($row[2])),
            'ending_month' => (!strlen($row[3]) ? null : trim($row[3])),
            'company_id' => (!strlen($row[4]) ? null : trim($row[4])),
            'cluster_id' => (!strlen($row[5]) ? null : trim(str_replace(",", "", $row[5]))),
            '2015_data' => (!strlen($row[6]) ? null : trim(str_replace(",", "", $row[6]))),
            '2016_data' => (!strlen($row[7]) ? null : trim(str_replace(",", "", $row[7]))),
            '2017_data' => (!strlen($row[8]) ? null : trim(str_replace(",", "", $row[8]))),
            '2018_data' => (!strlen($row[9]) ? null : trim(str_replace(",", "", $row[9]))),
            '2019_data' => (!strlen($row[10]) ? null : trim(str_replace(",", "", $row[10]))),
            '2020_data' => (!strlen($row[11]) ? null : trim(str_replace(",", "", $row[11]))),
            'last' => (!strlen($row[12]) ? null : trim(str_replace(",", "", $row[12]))),
            
        ]);
        // dd($values);
        return $values;

    }
    public function startRow(): int
    {
        return 2;
    }
}
