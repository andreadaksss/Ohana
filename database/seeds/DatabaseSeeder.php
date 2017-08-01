<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SpousesTableSeeder::class);
        $this->call(ChildrenTableSeeder::class);
        $this->call(MothersTableSeeder::class);
        $this->call(FathersTableSeeder::class);
        $this->call(TreesTableSeeder::class);
    }
}
