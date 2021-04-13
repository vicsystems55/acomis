<?php

namespace App\Imports;

use App\Ward;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WardImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Ward([
            'ward_name'     => $row['ward_name'],
            'lga'    => $row['lga'], 
            'state' => $row['state'],
         ]);
    }
}
