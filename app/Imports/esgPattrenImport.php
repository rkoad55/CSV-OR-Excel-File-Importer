<?php

namespace App\Imports;

use App\Models\esgPattrenModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class esgPattrenImport implements ToModel, WithStartRow
{

    public function __construct()
    {

    }

    public function model(array $row)
    {
        // dd($row);
        return new esgPattrenModel([
            'code' => (!strlen($row[0]) ? null : $row[0]),
            'pillar' => (!strlen($row[1]) ? null : $row[1]),
            'factor' => (!strlen($row[2]) ? null : $row[2]),
            'subfactor' => (!strlen($row[3]) ? null : $row[3]),
            'indicator' => (!strlen($row[4]) ? null : $row[4]),
            'apply' => (!strlen($row[5]) ? '999' : $row[5]),
            'subheading' => (!strlen($row[6]) ? null : $row[6]),
            'label' => (!strlen($row[7]) ? null : $row[7]),
            'sign' => (!strlen($row[8]) ? null : $row[8]),
        ]);

    }
    public function startRow(): int
    {
        return 2;
    }
}
