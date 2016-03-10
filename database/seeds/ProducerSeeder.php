<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProducerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('producers')->insert([
                'name' => $faker->company,
            ]);
        }
    }
}
