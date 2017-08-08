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
            [
                'fFirstname'        => 'Jaydel',
                'fMiddlename'       => 'Ridge',
                'fLastname'         => 'Villacin',
                'fBirthday'         => '1965-09-16',
                'fGender'           => 'Male',
                'fLivingStatus'     => 'Deceased',
                'fMaritalStatus'    => 'Married',
                'fUid'              => '7',
            ],
            [
                'fFirstname'        => 'Elbert',
                'fMiddlename'       => 'Reyes',
                'fLastname'         => 'Gabisan',
                'fBirthday'         => '1966-08-27',
                'fGender'           => 'Male',
                'fLivingStatus'     => 'Living',
                'fMaritalStatus'    => 'Married',
                'fUid'              => '12',
            ],
            [
                'fFirstname'        => 'Robert',
                'fMiddlename'       => 'Revlon',
                'fLastname'         => 'Jimenez',
                'fBirthday'         => '1966-04-27',
                'fGender'           => 'Male',
                'fLivingStatus'     => 'Living',
                'fMaritalStatus'    => 'Married',
                'fUid'              => '13',
            ],
            [
                'fFirstname'        => 'Bernardo',
                'fMiddlename'       => 'Calda',
                'fLastname'         => 'Verina',
                'fBirthday'         => '1938-12-16',
                'fGender'           => 'Male',
                'fLivingStatus'     => 'Living',
                'fMaritalStatus'    => 'Married',
                'fUid'              => '14',
            ],
            [
                'fFirstname'        => 'Eugenio',
                'fMiddlename'       => 'Calda',
                'fLastname'         => 'Lopez',
                'fBirthday'         => '1935-12-16',
                'fGender'           => 'Male',
                'fLivingStatus'     => 'Living',
                'fMaritalStatus'    => 'Married',
                'fUid'              => '15',
            ],
        ];

        DB::table('fathers')->insert($fathers);
    }
}
