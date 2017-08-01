<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users =
        [
        	[
                'email'             => 'nami@gmail.com',
                'password'          => bcrypt('nami'),
                'uFirstname'        => 'Nami',
                'uMiddlename'       => 'Bermudo',
                'uLastname'         => 'Lao Cubelo',
                'uBirthday'         => '1997-07-13',
                'uGender'           => 'Female',
                'uLivingStatus'     => 'Living',
                'uMaritalStatus'    => 'Single',
            ],
            [
                'email'             => 'nora@gmail.com',
                'password'          => bcrypt('nora'),
                'uFirstname'        => 'Nora',
                'uMiddlename'       => 'Bermudo',
                'uLastname'         => 'Lao Cubelo',
                'uBirthday'         => '1970-12-06',
                'uGender'           => 'Female',
                'uLivingStatus'     => 'Living',
                'uMaritalStatus'    => 'Married',
            ],
            [
                'email'             => 'rene@gmail.com',
                'password'          => bcrypt('rene'),
                'uFirstname'        => 'Rene',
                'uMiddlename'       => 'Cloribel',
                'uLastname'         => 'Lao Cubelo',
                'uBirthday'         => '1970-02-21',
                'uGender'           => 'Male',
                'uLivingStatus'     => 'Living',
                'uMaritalStatus'    => 'Married',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
