<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_category')->insert([
            'name' => str_random(10),
        ]);
    }
}
