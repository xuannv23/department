<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
class WorkonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $emp_id = DB::table("employees")->pluck("emp_id")->toArray();
        $prj_id = DB::table("projects")->pluck("prj_id")->toArray();
        $faker = Faker::create();
        for ($i=0; $i <10; $i++) { 
            DB::table('works_on')->insert([
                'emp_id' => $faker->randomElement($emp_id),
                'prj_id' => $faker->randomElement($prj_id),
            ]);
        }
    }
}
