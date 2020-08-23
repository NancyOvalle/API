<?php

use Illuminate\Database\Seeder;
use App\Job_Profile;
use Faker\Factory as Faker;

class Job_ProfileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        for($i=0;$i<=3;$i++){

        $profile=Job_Profile::create([
             
           'description'=>$faker-> realText,
           
        ]);
    }
}
}
