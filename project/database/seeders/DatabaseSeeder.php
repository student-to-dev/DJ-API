<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        foreach(range(1, 50) as $_){
            DB::table('names')->insert([
                'name' => $faker->firstName()
            ]);

            DB::table('surnames')->insert([
                'surname' => $faker->lastName()
            ]);

            DB::table('emails')->insert([
                'email' => $faker->email()
            ]);

            DB::table('phone_numbers')->insert([
                'phone_number' => '+3706'. rand(0000000, 99999999)
            ]);
        }   
    }
}
