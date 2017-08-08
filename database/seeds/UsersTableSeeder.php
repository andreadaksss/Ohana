<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users =
        [
        	[// 1
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
            [// 2
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
            [// 3
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
            [// 4
                'email'             => 'dave@gmail.com',
                'password'          => bcrypt('dave'),
                'uFirstname'        => 'Dave',
                'uMiddlename'       => 'Flores',
                'uLastname'         => 'Baclayon',
                'uBirthday'         => '1990-03-12',
                'uGender'           => 'Male',
                'uLivingStatus'     => 'Living',
                'uMaritalStatus'    => 'Married',
            ],
            [// 5
                'email'             => 'hinata@gmail.com',
                'password'          => bcrypt('hinata'),
                'uFirstname'        => 'Hinata',
                'uMiddlename'       => '',
                'uLastname'         => 'Shoyo',
                'uBirthday'         => '1996-06-21',
                'uGender'           => 'Male',
                'uLivingStatus'     => 'Living',
                'uMaritalStatus'    => 'Single',
            ],
            [// 6
                'email'             => 'gio@gmail.com',
                'password'          => bcrypt('gio'),
                'uFirstname'        => 'Gio',
                'uMiddlename'       => '',
                'uLastname'         => 'Conridge',
                'uBirthday'         => '1988-07-25',
                'uGender'           => 'Male',
                'uLivingStatus'     => 'Living',
                'uMaritalStatus'    => 'Single',
            ],
            [// 7
                'email'             => 'carlo@gmail.com',
                'password'          => bcrypt('carlo'),
                'uFirstname'        => 'Carlo',
                'uMiddlename'       => 'Ridge',
                'uLastname'         => 'Villacin',
                'uBirthday'         => '1989-08-19',
                'uGender'           => 'Male',
                'uLivingStatus'     => 'Living',
                'uMaritalStatus'    => 'Married',
            ],
        ];

        DB::table('users')->insert($users);
    }
}
