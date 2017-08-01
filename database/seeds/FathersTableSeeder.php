<?php

use Illuminate\Database\Seeder;

class FathersTableSeeder extends Seeder
{
    public function run()
    {
        $fathers =
        [
        	[
                'fFirstname'        => 'Rene',
                'fMiddlename'       => 'Cloribel',
                'fLastname'         => 'Lao Cubelo',
                'fBirthday'         => '1970-02-21',
                'fGender'           => 'Male',
                'fLivingStatus'     => 'Living',
                'fMaritalStatus'    => 'Married',
                'fUid'              => '1',
            ],
            [
                'fFirstname'        => 'Luisito',
                'fMiddlename'       => 'B',
                'fLastname'         => 'Bermudo',
                'fBirthday'         => '1925-08-20',
                'fGender'           => 'Male',
                'fLivingStatus'     => 'Deceased',
                'fMaritalStatus'    => 'Married',
                'fUid'              => '2',
            ],
            [
                'fFirstname'        => 'Miguel',
                'fMiddlename'       => 'Cloribel',
                'fLastname'         => 'Lao Cubelo',
                'fBirthday'         => '1925-06-20',
                'fGender'           => 'Male',
                'fLivingStatus'     => 'Deceased',
                'fMaritalStatus'    => 'Married',
                'fUid'              => '3',
            ],
        ];

        DB::table('fathers')->insert($fathers);
    }
}
