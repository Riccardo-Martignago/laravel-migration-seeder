<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 20; $i++){
            $trains = new Train();
            $trains->company = $faker->company;
            $trains->departure_station = $faker->city;
            $trains->arrival_station = $faker->city;
            $trains->departure_time = $faker->time;
            $trains->arrival_time = $faker->time;
            $trains->train_code = $faker->bothify('??####');
            $trains->number_of_carriages = $faker->numberBetween(1, 20);
            $trains->in_time = $faker->boolean;
            $trains->deleted = $faker->boolean;
            $trains->save();
        }
    }
}
