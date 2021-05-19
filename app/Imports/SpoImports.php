<?php

namespace App\Imports;

use App\SpoProfile;
use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SpoImports implements ToModel, WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $spo =  new SpoProfile([
                        
                'name' => $row['spo_name'],
                'email' => $row['email'],
                'phone' => $row['phone'],
                'state' => $row['state'],
                'address' => $row['address']

         ]);


         $new_user = User::updateOrCreate([
             'email' => $row['email']
         ],[
            'name' => $row['spo_name'],
            'email' => $row['email'],
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make($row['phone']),
            'role' => 'spo'
         ]);

         return $spo;


         
    }
}
