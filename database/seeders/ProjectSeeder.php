<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $depart_id = DB::table("departments")->pluck("depart_id")->toArray();
        $faker = Faker::create();
        for ($i=0; $i <10; $i++) { 
            if (count($depart_id) == 0) {
                // Nếu hết nhân viên thì dừng vòng lặp
                break;
            }
            $randomIndex = array_rand($depart_id);
            $selectedDepart_id = $depart_id[$randomIndex];
            unset($depart_id[$randomIndex]);
            DB::table('projects')->insert([
                'prj_name' => $faker->name,
                'prj_loca' => $faker->address,
                'depart_id' => $selectedDepart_id,
            ]);
        }
    }
}
