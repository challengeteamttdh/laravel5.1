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
//        $faker = Faker::create();
//        foreach (range(1,10) as $index) {
//            DB::table('product_category')->insert([
//                'name' => $faker->name,
//            ]);
//        }
        //delete users table records
        DB::table('product_category')->delete();
        //insert some dummy records
        DB::table('product_category')->insert(array(
            array('name'=>'NỘI THẤT PHÒNG KHÁCH'),
            array('name'=>'NỘI THẤT PHÒNG NGỦ'),
            array('name'=>'NỘI THẤT PHÒNG ĂN'),
            array('name'=>'NỘI THẤT VĂN PHÒNG'),
            array('name'=>'NỘI THẤT TRẺ EM'),
            array('name'=>'NỘI THẤT KHÁC'),
        ));
    }
}
