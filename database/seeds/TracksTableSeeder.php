<?php

use Illuminate\Database\Seeder;
use App\Tracks;


class TracksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tracks::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Tracks::create([
                'nome' => $faker->name,
                'duracao' => $faker->numberBetween($min = 1, $max = 300),
                'album' => $faker->numberBetween($min = 1, $max = 5),
                'ordem' => $faker->numberBetween($min = 1, $max = 12),
            ]);
        }

    }
}

// php artisan db:seed --class