<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insertOrIgnore([

            
            [
                'id' => '10001',

                'name' => 'Super Admin',

                'email' => 'superadmin@acomis.com',
                
                'email_verified_at' => now(),

                'password' =>  Hash::make('secret'),
                
                'email_verified_at' => now(),

                'role' => 'super_admin',

                'remember_token' => null,

                'created_at' => now(),

                'updated_at' => now(),
            ],

            [
                'id' => '10002',

                'name' => 'Admin 001',

                'email' => 'admin001@acomis.com',
                
                'email_verified_at' => now(),

                'password' =>  Hash::make('secret'),
                
                'email_verified_at' => now(),

                'role' => 'admin',

                'remember_token' => null,

                'created_at' => now(),
                
                'updated_at' => now(),
            ],

            [
                'id' => '10003',

                'name' => 'Contact Person1',

                'email' => 'contact_person1@acomis.com',
                
                'email_verified_at' => now(),

                'password' =>  Hash::make('secret'),
                
                'email_verified_at' => now(),

                'role' => 'hcbo',

                'remember_token' => null,

                'created_at' => now(),
                
                'updated_at' => now(),
            ],

            [
                'id' => '10004',

                'name' => 'Contact Person2',

                'email' => 'contact_person2@acomis.com',
                
                'email_verified_at' => now(),

                'password' =>  Hash::make('secret'),
                
                'email_verified_at' => now(),

                'role' => 'hcbo',

                'remember_token' => null,

                'created_at' => now(),
                
                'updated_at' => now(),
            ],

            [
                'id' => '10005',

                'name' => 'Monitoring Officer1',

                'email' => 'monitoringofficer1@acomis.com',
                
                'email_verified_at' => now(),

                'password' =>  Hash::make('secret'),
                
                'email_verified_at' => now(),

                'role' => 'hcbo',

                'remember_token' => null,

                'created_at' => now(),
                
                'updated_at' => now(),
            ],

            [
                'id' => '10006',

                'name' => 'Monitoring Officer2',

                'email' => 'monitoringofficer2@acomis.com',
                
                'email_verified_at' => now(),

                'password' =>  Hash::make('secret'),
                
                'email_verified_at' => now(),

                'role' => 'hcbo',

                'remember_token' => null,

                'created_at' => now(),
                
                'updated_at' => now(),
            ],

            [
                'id' => '10007',

                'name' => 'State Officer1',

                'email' => 'spo1@acomis.com',
                
                'email_verified_at' => now(),

                'password' =>  Hash::make('secret'),
                
                'email_verified_at' => now(),

                'role' => 'spo',

                'remember_token' => null,

                'created_at' => now(),
                
                'updated_at' => now(),
            ],

            [
                'id' => '10008',

                'name' => 'State Officer2',

                'email' => 'spo2@acomis.com',
                
                'email_verified_at' => now(),

                'password' =>  Hash::make('secret'),
                
                'email_verified_at' => now(),

                'role' => 'spo',

                'remember_token' => null,

                'created_at' => now(),
                
                'updated_at' => now(),
            ],
     
          ]);
    }
}
