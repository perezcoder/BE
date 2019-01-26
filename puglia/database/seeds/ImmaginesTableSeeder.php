<?php

use Illuminate\Database\Seeder;
use App\Immagine;

class ImmaginesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Immagine::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Immagine::create([
                'link' => $faker->sentence,
                'articolo_id' => $faker->numberBetween(1,20),
            ]);
        }
    }
}
