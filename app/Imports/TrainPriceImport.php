<?php

namespace App\Imports;

use App\Models\TrainPrice;
use Maatwebsite\Excel\Concerns\ToModel;

class TrainPriceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new TrainPrice([
            'regionFrom' => $row[0],
            'regionTo' => $row[1],
            'price' => $row[2],
        ]);
    }
}
