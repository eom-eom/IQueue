<?php

use Illuminate\Database\Seeder;
use App\Doctor;

class DoctorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // populate time!
        $faker = Faker\Factory::create(); 
 
        foreach(range(1,5) as $index)
        {
            Doctor::create([         
            	'first_name' => $faker->firstName($gender = null|'male'|'female'),
            	'last_name' => $faker->lastName,
            	'middle_name' => $faker->lastName,
            	'address_hos_id' => '1',
                'gender' => $faker->randomElement($array = array ('male', 'female'))  
            ]);
        }
    }
}
