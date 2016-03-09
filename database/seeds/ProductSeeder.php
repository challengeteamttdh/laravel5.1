<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $width = 200;
        $height = 200;
        foreach (range(1,50) as $index) {
            DB::table('products')->insert([
                'title' => $faker->title,
                'sub_category_id' => App\ProductSubCategory::all()->random()->id,
                'color_id' => \App\Color::all()->random()->id,
                'material_id' => \App\Material::all()->random()->id,
                'producer_id' => \App\Producer::all()->random()->id,
                'product_code' => $faker->postcode,
                'content' => $faker-> realText(),
                'picture' => $faker -> imageUrl($width, $height, 'cats', true, 'Faker'),
            ]);
        }
    }
}
