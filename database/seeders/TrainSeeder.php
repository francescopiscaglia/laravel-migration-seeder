<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Train;
use Carbon\Carbon;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Train::insert([
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Roma Termini',
                'arrival_station' => 'Milano Centrale',
                'departure_time' => Carbon::now()->addDays(1),
                'arrival_time' => Carbon::now()->addDays(1)->addHours(3),
                'train_code' => 'IC1234',
                'carriages' => 12,
                'on_time' => true,
                'cancelled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Napoli Centrale',
                'arrival_station' => 'Torino Porta Nuova',
                'departure_time' => Carbon::now()->addDays(2),
                'arrival_time' => Carbon::now()->addDays(2)->addHours(5),
                'train_code' => 'IT998',
                'carriages' => 8,
                'on_time' => false,
                'cancelled' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
