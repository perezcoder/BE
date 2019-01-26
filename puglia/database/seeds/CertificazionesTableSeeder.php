<?php

use Illuminate\Database\Seeder;
use App\Certificazione;

class CertificazionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Certificazione::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Certificazione::create([
                'nome' => $faker->sentence,
                'link' => $faker->sentence,
            ]);
        }
    }
}
