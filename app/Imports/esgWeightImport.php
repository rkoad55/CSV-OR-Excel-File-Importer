<?php

namespace App\Imports;

use App\Models\esgWeightModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class esgWeightImport implements ToModel, WithStartRow
{

    public function __construct()
    {

    }

    public function model(array $row)
    {
        // dd($row);
        return new esgWeightModel([
            'code' => (!strlen($row[0]) ? null : trim($row[0])),
            'c_1' => (!strlen($row[1]) ? null : trim($row[1])),
            'c_2' => (!strlen($row[2]) ? null : trim($row[2])),
            'c_4' => (!strlen($row[3]) ? null : trim($row[3])),
            'c_5' => (!strlen($row[4]) ? null : trim($row[4])),
            'c_6' => (!strlen($row[5]) ? null : trim($row[5])),
            'c_7' => (!strlen($row[6]) ? null : trim($row[6])),
            'c_8' => (!strlen($row[7]) ? null : trim($row[7])),
            'c_9' => (!strlen($row[8]) ? null : trim($row[8])),
            'c_10' => (!strlen($row[9]) ? null : trim($row[9])),
            'c_11' => (!strlen($row[10]) ? null : trim($row[10])),
            'c_13' => (!strlen($row[11]) ? null : trim($row[12])),
            'c_14' => (!strlen($row[12]) ? null : trim($row[12])),
            'c_15' => (!strlen($row[13]) ? null : trim($row[13])),
            'c_16' => (!strlen($row[14]) ? null : trim($row[14])),
            'c_17' => (!strlen($row[15]) ? null : trim($row[15])),
            'c_18' => (!strlen($row[16]) ? null : trim($row[16])),


        ]);

    }
    public function startRow(): int
    {
        return 3;
    }
}
