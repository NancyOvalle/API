<?php

use Illuminate\Database\Seeder;
use App\Academic_Title;
use Faker\Factory as Faker;

class Academic_TitlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<=3; $i++){

            $Trabajador=Academic_Title::create([
                'titles'=> $faker-> bs,
                'university'=> $faker-> catchPhrase,               
            ]);
    }
}
}
