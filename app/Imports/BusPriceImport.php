<?php

namespace App\Imports;

use App\Models\BusPrice;
use Maatwebsite\Excel\Concerns\ToModel;

class BusPriceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new BusPrice([
            'regionFrom' => $row[0],
            'regionTo' => $row[1],
            'price' => $row[2],
        ]);
    }
}
