<?php

use Illuminate\Database\Seeder;

class SpousesTableSeeder extends Seeder
{
    public function run()
    {
        $spouses =
        [
            [
                'sFirstname'        => 'Rene',
                'sMiddlename'       => 'Cloribel',
                'sLastname'         => 'Lao Cubelo',
                'sBirthday'         => '1970-02-21',
                'sGender'           => 'Male',
                'sLivingStatus'     => 'Living',
                'sMaritalStatus'    => 'Married',
                'sUid'              => '2',
            ],
            [
                'sFirstname'        => 'Nora',
                'sMiddlename'       => 'Bermudo',
                'sLastname'         => 'Lao Cubelo',
                'sBirthday'         => '1970-12-06',
                'sGender'           => 'Female',
                'sLivingStatus'     => 'Living',
                'sMaritalStatus'    => 'Married',
                'sUid'              => '3',
            ],
        ];

        DB::table('spouses')->insert($spouses);
    }
}
