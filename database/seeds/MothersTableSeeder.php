<?php

use Illuminate\Database\Seeder;

class MothersTableSeeder extends Seeder
{
    public function run()
    {
        $mothers =
        [
        	[
                'mFirstname'        => 'Nora',
                'mMiddlename'       => 'Bermudo',
                'mLastname'         => 'Lao Cubelo',
                'mBirthday'         => '1970-12-06',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Married',
                'mUid'              => '1',
            ],
            [
                'mFirstname'        => 'Estefania',
                'mMiddlename'       => 'Torayno',
                'mLastname'         => 'Bermudo',
                'mBirthday'         => '1927-09-29',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Married',
                'mUid'              => '2',
            ],
            [
                'mFirstname'        => 'Susan',
                'mMiddlename'       => 'Uy',
                'mLastname'         => 'Lao Cubelo',
                'mBirthday'         => '1927-04-12',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Married',
                'mUid'              => '3',
            ],
            [
                'mFirstname'        => 'Rose',
                'mMiddlename'       => 'Flores',
                'mLastname'         => 'Baclayon',
                'mBirthday'         => '1965-12-12',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Single',
                'mUid'              => '4',
            ],
            [
                'mFirstname'        => 'Hanabi',
                'mMiddlename'       => '',
                'mLastname'         => 'Shoyo',
                'mBirthday'         => '1970-03-29',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Single',
                'mUid'              => '5',
            ],
            [
                'mFirstname'        => 'Rohann',
                'mMiddlename'       => '',
                'mLastname'         => 'Conridge',
                'mBirthday'         => '1968-07-15',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Single',
                'mUid'              => '6',
            ],
            [
                'mFirstname'        => 'Brenda',
                'mMiddlename'       => 'Verina',
                'mLastname'         => 'Gabisan',
                'mBirthday'         => '1961-01-14',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Married',
                'mUid'              => '12',
            ],
            [
                'mFirstname'        => 'Criszel',
                'mMiddlename'       => 'Mancao',
                'mLastname'         => 'Jimenez',
                'mBirthday'         => '1971-01-01',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Married',
                'mUid'              => '13',
            ],
            [
                'mFirstname'        => 'Leonora',
                'mMiddlename'       => 'Vilan',
                'mLastname'         => 'Verina',
                'mBirthday'         => '1935-07-03',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Married',
                'mUid'              => '14',
            ],
            [
                'mFirstname'        => 'Elizabeth',
                'mMiddlename'       => 'Ella',
                'mLastname'         => 'Lopez',
                'mBirthday'         => '1940-07-03',
                'mGender'           => 'Female',
                'mLivingStatus'     => 'Living',
                'mMaritalStatus'    => 'Married',
                'mUid'              => '15',
            ],
        ];

        DB::table('mothers')->insert($mothers);
    }
}
