<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker=Faker::create();

        for($i=0;$i<=50;$i++){

        $user=User::create([
             
           'names'=>$faker-> name,
           'lastnames'=>$faker-> lastname,
           'email'=>$faker-> email,
           'phone'=>$faker-> phonenumber,
           'residence_address'=>$faker-> address,
           'job_profile_id' => 1,
           'work_experience_id' => 1,
        ]);
        }
}
}
