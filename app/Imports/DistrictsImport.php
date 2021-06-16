<?php

namespace App\Imports;

use App\Models\District;
use Maatwebsite\Excel\Concerns\ToModel;

class DistrictsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new District([
            'name'      => $row[0],
            'center'    => $row[1],
            'region_id' => $row[2],
        ]);
    }
}
