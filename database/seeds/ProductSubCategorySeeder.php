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
//        $faker = Faker::create();
//        $categories = ProductCategory::all()->lists('id');
//        foreach (range(1,10) as $index) {
//            DB::table('product_sub_category')->insert([
//                'name' => $faker->name,
//                'category_id' => App\ProductCategory::all()->random()->id,
//            ]);
//        }

        //delete users table records
        DB::table('product_sub_category')->delete();
        //insert some dummy records
        DB::table('product_sub_category')->insert(array(
            array('name'=>'Phòng Khách Tân Cổ Điển','category_id'=>1),
            array('name'=>'Phòng Khách Đẹp','category_id'=>1),
            array('name'=>'Sofa','category_id'=>1),
            array('name'=>'Bàn Trà','category_id'=>1),
            array('name'=>'Kệ Tivi','category_id'=>1),
            array('name'=>'Giá Sách Đẹp','category_id'=>1),
            array('name'=>'taylor','category_id'=>1),
            array('name'=>'Tủ Áo Cánh Mở','category_id'=>2),
            array('name'=>'Tủ Áo Cánh Lùa','category_id'=>2),
            array('name'=>'Giường Ngủ Đẹp','category_id'=>2),
            array('name'=>'Bàn Trang Điểm','category_id'=>2),
            array('name'=>'Tủ Đầu Giường','category_id'=>2),
            array('name'=>'Tủ Đựng Đồ','category_id'=>2),
            array('name'=>'Tủ Bếp Đẹp','category_id'=>3),
            array('name'=>'Bàn Ghế Ăn','category_id'=>3),
            array('name'=>'Tủ Bếp Dạng Chữ I','category_id'=>3),
            array('name'=>'Tủ Bếp Dạng Chữ L','category_id'=>3),
            array('name'=>'Bàn Giám Đốc','category_id'=>4),
            array('name'=>'Bàn Nhân Viên','category_id'=>4),
            array('name'=>'Bàn Họp','category_id'=>4),
            array('name'=>'Tủ Hồ Sơ','category_id'=>4),
            array('name'=>'Giường Ngủ Trẻ Em','category_id'=>5),
            array('name'=>'Tủ Áo Trẻ Em','category_id'=>5),
            array('name'=>'Tủ Giày','category_id'=>6),
            array('name'=>'Cửa Gỗ','category_id'=>6),
            array('name'=>'Vách Ngăn','category_id'=>6),
            array('name'=>'Án Gian','category_id'=>6),
            array('name'=>'Sập Gụ Tủ Chè','category_id'=>6),
            array('name'=>'Sàn Gỗ','category_id'=>6),

        ));
    }
}
