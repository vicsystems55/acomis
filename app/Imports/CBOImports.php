<?php

namespace App\Imports;

use App\Cbo;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CBOImports implements ToModel, WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $cbo =  new Cbo([
                        
                'cbo_name' => $row['cbo_name'],
                'contact_person' => $row['contact_person'],
                'email' => $row['email'],
                'phone' => $row['phone'],
                'state' => $row['state'],
                'lga' => $row['lga'],
                'address' => $row['address']

         ]);


         $new_user = User::updateOrCreate([
             'email' => $row['email']
         ],[
            'name' => $row['contact_person'],
            'email' => $row['email'],
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make($row['phone']),
            'role' => 'hcbo'
         ]);


         return $cbo;
    }
}
