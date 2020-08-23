<?php

use Illuminate\Database\Seeder;
use App\Customer;
use Faker\Factory as Faker;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        $contador=0;
        $contador1=0;
        $contador2=0;

        for($i=0; $i<=50; $i++){
            $contador= $contador+1;
            $contador1= $contador1+1;
            $contador2= $contador2+1;


        $customer=Customer::create([
             
           'users_id'=> $contador,
           'academic_titles_id'=> $contador2,
           'work_experience_id'=> 1,
           'user_availability_id'=> $contador1,
           'job_profile_id'=> 1,
           
        ]);

        if($contador==50){
                $contador=0;
    }
        if($contador1==2){
                $contador1=0;
    }
        if($contador2==3){
                $contador2=0;
    }
}
}
}

