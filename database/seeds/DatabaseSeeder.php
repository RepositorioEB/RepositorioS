<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProfilesTableSeeder::class);
        $this->call(categoriesTableSeeder::class);
        $this->call(typesTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(helpsTableSeeder::class);
    }
}