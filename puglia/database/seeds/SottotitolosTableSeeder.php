<?php

use Illuminate\Database\Seeder;
use App\Sottotitolo;

class SottotitolosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sottotitolo::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Sottotitolo::create([
                'nome' => $faker->sentence,
            ]);
        }
    }
}
