<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\ProductCategory;

class ProductSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $categories = ProductCategory::all()->lists('id');
        foreach (range(1,10) as $index) {
            DB::table('product_sub_category')->insert([
                'name' => $faker->name,
                'category_id' => App\ProductCategory::all()->random()->id,
            ]);
        }
    }
}
