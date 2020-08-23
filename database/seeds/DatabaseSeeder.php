<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(User_AbailabilityTableSeeder::class);
        $this->call(Academic_TitlesTableSeeder::class);
        $this->call(Job_ProfileTableSeeder::class);
        $this->call(Work_ExperienceTableSeeder::class);
        $this->call(UsertableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        
        
        
}
}