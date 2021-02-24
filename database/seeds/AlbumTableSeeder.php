<?php

use Illuminate\Database\Seeder;
use App\Album;

class AlbumTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Album::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            Album::create([
                'nome' => $faker->name,
                'ano' => $faker->date,
                'artista' => $faker->name,
                'faixas' => $faker->numberBetween($min = 1, $max = 12),

            ]);
        }

    }
}


#php artisan db:seed --class=AlbumTableSeeder
