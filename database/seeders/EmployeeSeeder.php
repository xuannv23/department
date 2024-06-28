<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i <20; $i++) { 
            DB::table('employees')->insert([
                'emp_name' => $faker->name,
                'emp_gender' => $faker->randomElement(['nam', 'nu']),
                'emp_add' => $faker->address,
                'emp_dob' => $faker->date,
                'emp_doj' => $faker->date,
                'depart_id' => null,
            ]);
        }
    }
}
