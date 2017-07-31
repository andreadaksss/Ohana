<?php

use Illuminate\Database\Seeder;

class TreesTableSeeder extends Seeder
{
    public function run()
    {
        $trees = 
        [
        	['tUid' => '1'],
        	['tUid' => '2'],
        ];

        DB::table('trees')->insert($trees);
    }
}
