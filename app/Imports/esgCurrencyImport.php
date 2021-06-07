<?php

namespace App\Imports;

use App\Models\esgCurrencyModel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class esgCurrencyImport implements ToModel, WithStartRow
{

    public function __construct()
    {

    }

    public function model(array $row)
    {
        // dd((8.44E-5 * 2), $row);
        return new esgCurrencyModel([
            'type' => (!strlen($row[0]) ? null : trim($row[0])),
            'ending' => (!strlen($row[1]) ? null : trim($row[1])),
            'year' => (!strlen($row[2]) ? null : trim($row[2])),
            'EUR' => (!strlen($row[3]) ? null : trim($row[3])),
            'PKR' => (!strlen($row[4]) ? null : trim($row[4])),
            'CNY' => (!strlen($row[5]) ? null : trim($row[5])),
            'INR' => (!strlen($row[6]) ? null : trim($row[6])),
            'HKD' => (!strlen($row[7]) ? null : trim($row[7])),
            'ZAR' => (!strlen($row[8]) ? null : trim($row[8])),
            'IDR' => (!strlen($row[9]) ? null : trim($row[9])),
            'KRW' => (!strlen($row[10]) ? null : trim($row[10])),
            'MYR' => (!strlen($row[11]) ? null : trim($row[11])),
            'PHP' => (!strlen($row[12]) ? null : trim($row[12])),
            'TWD' => (!strlen($row[13]) ? null : trim($row[13])),
            'THB' => (!strlen($row[14]) ? null : trim($row[14])),
            'VND' => (!strlen($row[15]) ? null : trim($row[15])),
            'SAR' => (!strlen($row[16]) ? null : trim($row[16])),
            'ARS' => (!strlen($row[17]) ? null : trim($row[17])),
            'HUF' => (!strlen($row[18]) ? null : trim($row[18])),
            'KWD' => (!strlen($row[19]) ? null : trim($row[19])),
            'MXN' => (!strlen($row[20]) ? null : trim($row[20])),
            'PLN' => (!strlen($row[21]) ? null : trim($row[21])),
            'BRL' => (!strlen($row[22]) ? null : trim($row[22])),
            'QAR' => (!strlen($row[23]) ? null : trim($row[23])),
            'RUB' => (!strlen($row[24]) ? null : trim($row[24])),
            'CLP' => (!strlen($row[25]) ? null : trim($row[25])),
            'TRY' => (!strlen($row[26]) ? null : trim($row[26])),
            
        ]);

    }
    public function startRow(): int
    {
        return 2;
    }
}
