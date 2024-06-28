<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
class DependentSeeder extends Seeder
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
            DB::table('dependents')->insert([
                'depen_gender' => $faker->randomElement(['nam', 'nu']),
                'depen_rela' => $faker->randomElement(['vo', 'chong', 'con', 'bo', 'me']),
                'emp_id' => $selectedEmpId,
            ]);
        }
    }
}
