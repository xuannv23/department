<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as faker;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i <10; $i++) { 
            DB::table('customers')->insert([
                'Name' => $faker->name,
                'Email' => $faker->email,
                'Phone' => $faker->phoneNumber,
            ]);
        }
    }
}
