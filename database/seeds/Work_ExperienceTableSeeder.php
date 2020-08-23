<?php

use Illuminate\Database\Seeder;
use App\Work_Experience;
use Faker\Factory as Faker;

class Work_ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        $experience=Work_Experience::create([
             
           'start_date'=>$faker-> date,
           'ending_date'=>$faker-> date,
           'activities'=>$faker-> realText,
           'business'=>$faker-> Company,
           
        ]);
    }
}
