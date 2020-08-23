<?php

use Illuminate\Database\Seeder;
use App\User_Availabilit;

class User_AbailabilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

            $Abailability=User_Availabilit::create([
                'status'=>'Disponible'
            ]);

            $Abailability=User_Availabilit::create([
                'status'=>'No Disponible'
            ]);
        
    }
}
