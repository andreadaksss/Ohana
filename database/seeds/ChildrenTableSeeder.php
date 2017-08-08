<?php

use Illuminate\Database\Seeder;

class ChildrenTableSeeder extends Seeder
{
    public function run()
    {
        $children =
        [
            [
                'cFirstname'        => 'Renae',
                'cMiddlename'       => 'Bermudo',
                'cLastname'         => 'Lao Cubelo',
                'cBirthday'         => '1999-09-29',
                'cGender'           => 'Female',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '2',
            ],
            [
                'cFirstname'        => 'Nami',
                'cMiddlename'       => 'Bermudo',
                'cLastname'         => 'Lao Cubelo',
                'cBirthday'         => '1997-07-13',
                'cGender'           => 'Female',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '2',
            ],
            [
                'cFirstname'        => 'Christine',
                'cMiddlename'       => 'Gabuya',
                'cLastname'         => 'Baclayon',
                'cBirthday'         => '1995-01-23',
                'cGender'           => 'Female',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '4',
            ],
            [
                'cFirstname'        => 'Martha',
                'cMiddlename'       => '',
                'cLastname'         => 'Conridge',
                'cBirthday'         => '2008-04-17',
                'cGender'           => 'Female',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '6',
            ],
            [
                'cFirstname'        => 'Roderick jr',
                'cMiddlename'       => 'Agravante',
                'cLastname'         => 'Bandalan',
                'cGender'           => 'Male',
                'cBirthday'         => '1994-01-15',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '8',
            ],
            [
                'cFirstname'        => 'Josh',
                'cMiddlename'       => 'Poppins',
                'cLastname'         => 'Cerny',
                'cGender'           => 'Male',
                'cBirthday'         => '1994-03-18',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Married',
                'cUid'              => '10',
            ],
             [
                'cFirstname'        => 'Britney',
                'cMiddlename'       => 'Poppins',
                'cLastname'         => 'Cerny',
                'cGender'           => 'Female',
                'cBirthday'         => '1995-10-21',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '10',
            ],
            [
                'cFirstname'        => 'Kiyawe',
                'cMiddlename'       => 'Cruz',
                'cLastname'         => 'Gabisan',
                'cBirthday'         => '2018-07-13',
                'cGender'           => 'Male',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '12',
            ],
            [
                'cFirstname'        => 'Cutie',
                'cMiddlename'       => '',
                'cLastname'         => 'Vilan',
                'cBirthday'         => '2000-07-13',
                'cGender'           => 'Female',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '14',
            ],
            [
                'cFirstname'        => 'Spyke',
                'cMiddlename'       => '',
                'cLastname'         => 'Vilan',
                'cBirthday'         => '2003-08-02',
                'cGender'           => 'Male',
                'cLivingStatus'     => 'Living',
                'cMaritalStatus'    => 'Single',
                'cUid'              => '14',
            ],

        ];

        DB::table('children')->insert($children);
    }
} 