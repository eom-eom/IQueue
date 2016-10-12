<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    
    public function run()
    {
        //
        $faker = Faker\Factory::create(); 
 
        foreach(range(1,5) as $index)
        {
            User::create([         
            	'user_type_id' => $faker->biasedNumberBetween($min = 0, $max = 4),
                'user_name' => $faker->userName,
                'email' =>$faker->email,
                'password' =>bcrypt('secret')
            ]);
        }
    }
}
