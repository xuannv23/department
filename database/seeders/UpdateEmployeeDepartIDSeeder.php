<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;
class UpdateEmployeeDepartIDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $depart_ids = DB::table('departments')->pluck('depart_id')->toArray();

        $employees = DB::table('employees')->get();

        foreach ($employees as $employee) {
            $randomDepartId = $depart_ids[array_rand($depart_ids)];
            DB::table('employees')
                ->where('emp_id', $employee->emp_id)
                ->update(['depart_id' => $randomDepartId]);
        }
    }
}
