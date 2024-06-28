<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class BookingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        $roomIDs = DB::table("rooms")->pluck("RoomID")->toArray();
        $customerIDs = DB::table("customers")->pluck("CustomerID")->toArray();
        if (empty($roomIDs) || empty($customerIDs)) {
            return;
        }
        $faker = Faker::create();
        
        for ($i=0; $i <10; $i++) { 
            $checkinDate = $faker->dateTimeBetween('-1 month', 'now');
            $checkoutDate = $faker->dateTimeBetween($checkinDate, '+1 week');
            DB::table('bookings')->insert([
                'CustomerID' => $faker->randomElement($customerIDs),
                'RoomID' => $faker->randomElement($roomIDs),
                'CheckinDate' => $checkinDate,
                'CheckoutDate' => $checkoutDate,
            ]);
        }
    }
}
