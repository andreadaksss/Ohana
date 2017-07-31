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
        ];

        DB::table('spouses')->insert($spouses);
    }
}
