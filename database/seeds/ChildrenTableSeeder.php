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
        ];

        DB::table('children')->insert($children);
    }
} 