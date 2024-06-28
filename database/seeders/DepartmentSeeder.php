<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $emp_ids = DB::table("employees")->pluck("emp_id")->toArray();
        $faker = Faker::create();
        for ($i=0; $i <10; $i++) { 
            if (count($emp_ids) == 0) {
                // Nếu hết nhân viên thì dừng vòng lặp
                break;
            }
            $randomIndex = array_rand($emp_ids);
            $selectedEmpId = $emp_ids[$randomIndex];
            unset($emp_ids[$randomIndex]);
            DB::table('departments')->insert([
                'depart_name' => $faker->name,
                'depart_loca' => $faker->address,
                'emp_id' => $selectedEmpId,
                'since' => $faker->date,
            ]);
        }
    }
}
