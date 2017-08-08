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
            [
                'sFirstname'        => 'Nina',
                'sMiddlename'       => 'Gabuya',
                'sLastname'         => 'Baclayon',
                'sBirthday'         => '1990-04-26',
                'sGender'           => 'Female',
                'sLivingStatus'     => 'Living',
                'sMaritalStatus'    => 'Married',
                'sUid'              => '4',
            ],
            [
                'sFirstname'        => 'Chery',
                'sMiddlename'       => 'Green',
                'sLastname'         => 'Villacin',
                'sBirthday'         => '1990-05-16',
                'sGender'           => 'Female',
                'sLivingStatus'     => 'Living',
                'sMaritalStatus'    => 'Married',
                'sUid'              => '7',
            ],
        ];

        DB::table('spouses')->insert($spouses);
    }
}
