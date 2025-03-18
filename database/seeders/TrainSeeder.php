<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Train;
use Faker\Factory as Faker;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) { 
            Train::create([
                'company' => $faker->randomElement(['Trenitalia', 'Italo', 'Trenord', 'Frecciarossa']),
                'departure_station' => $faker->city,
                'arrival_station' => $faker->city,
                'departure_time' => Carbon::now()->addDays(rand(1, 10))->format('Y-m-d H:i:s'),
                'arrival_time' => Carbon::now()->addDays(rand(1, 10))->addHours(rand(1, 5))->format('Y-m-d H:i:s'),
                'train_code' => strtoupper($faker->bothify('??###')), 
                'carriages' => $faker->numberBetween(5, 15),
                'on_time' => $faker->boolean(80), 
                'cancelled' => $faker->boolean(10), 
            ]);
        }
    }
}
