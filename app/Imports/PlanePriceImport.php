<?php

namespace App\Imports;

use App\Models\PlanePrice;
use Maatwebsite\Excel\Concerns\ToModel;

class PlanePriceImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new PlanePrice([
            'regionFrom' => $row[0],
            'regionTo' => $row[1],
            'price' => $row[2],
        ]);
    }
}
