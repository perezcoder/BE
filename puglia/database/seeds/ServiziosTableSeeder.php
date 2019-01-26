<?php

use Illuminate\Database\Seeder;
use App\Servizio;

class ServiziosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Servizio::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Servizio::create([
                'nome' => $faker->sentence,
                'descrizione' => $faker->sentence,
                'icona' => $faker->sentence,
            ]);
        }
    }
}
