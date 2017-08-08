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
            [
                'sFirstname'        => 'Joveline',
                'sMiddlename'       => 'Agravante',
                'sLastname'         => 'Bandalan',
                'sBirthday'         => '1965-01-21',
                'sGender'           => 'Female',
                'sLivingStatus'     => 'Living',
                'sMaritalStatus'    => 'Married',
                'sUid'              => '8',
            ],
            [
                'sFirstname'        => 'Joshua',
                'sMiddlename'       => 'Poppins',
                'sLastname'         => 'Cerny',
                'sBirthday'         => '1985-10-10',
                'sGender'           => 'Male',
                'sLivingStatus'     => 'Living',
                'sMaritalStatus'    => 'Married',
                'sUid'              => '10',
            ],
            [
                'sFirstname'        => 'Jayvee',
                'sMiddlename'       => 'Cruz',
                'sLastname'         => 'Gabisan',
                'sBirthday'         => '1997-12-06',
                'sGender'           => 'Female',
                'sLivingStatus'     => 'Living',
                'sMaritalStatus'    => 'Married',
                'sUid'              => '12',
            ],
            [
                'sFirstname'        => 'Nicolas James',
                'sMiddlename'       => 'Deed',
                'sLastname'         => 'Chiong',
                'sBirthday'         => '1996-01-19',
                'sGender'           => 'Male',
                'sLivingStatus'     => 'Living',
                'sMaritalStatus'    => 'Married',
                'sUid'              => '13',
            ],

        ];

        DB::table('spouses')->insert($spouses);
    }
}
