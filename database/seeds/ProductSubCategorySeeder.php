<?php

use Illuminate\Database\Seeder;

class ProductSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_sub_category')->insert([
            'name' => str_random(10),
            'category_id' => 1,
        ]);
    }
}
