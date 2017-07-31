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
        ];

        DB::table('children')->insert($children);
    }
} 