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
        foreach (range(1,5) as $index) {
            DB::table('products')->insert([
                'title' => "Tủ bếp gỗ công nghiệp",
                'sub_category_id' => App\ProductSubCategory::all()->random()->id,
                'color_id' => \App\Color::all()->random()->id,
                'material_id' => \App\Material::all()->random()->id,
                'producer_id' => \App\Producer::all()->random()->id,
                'product_code' => $faker->postcode,
                'content' => "Tủ bếp gỗ công nghiệp cao cấp Ngày nay ngoài chất liệu gỗ tự nhiên xoan đào, gỗ sồi nga, gỗ thông... làm tủ bếp nói riêng và đồ nội thất nói chung, khách hàng có thêm được sự lựa chọn là gỗ công nghiệp cao cấp như lamilate,acylic, meca... Với kiểu dáng cách tân phù hợp với những không gian nhà hiện đại, gỗ công nghiệp cao cấp đang ngày càng chiếm được lòng tin của người tiêu dùng, đặc biệt với những đôi vợ chồng trẻ. Cùng với sự phát triển của khoa học kỹ thuật, chất lượng của gỗ công nghiệp đang ngày càng được nâng cao hơn để không thua kém so với gỗ tự nhiên. Hiện nay những mẫu tủ bếp đẹp đang được tủ bếp Hoàng Anh cung cấp trên thị trường và được khách hàng đón nhận. Và để đáp lại lòng tin đó, tủ bếp HOÀNG ANH đang cố gắng hơn nữa để thiết kế ra những mẫu tủ bếp đẹp, với những công năng sử dụng hợp lý để hỗ trợ tối đa cho người nội trợ.
Xin cảm ơn quý khách hàng đã quan tâm và coi sản phẩm của tủ bếp HOÀNG ANH như một phần tất yếu trong cuộc sống hàng ngày của gia đình bạn!",
                'picture' => "fe0c5b4eb2f05430ba0766d4c0a0eb5da1d9cc6b.jpg",
            ]);
        }

        foreach (range(1,5) as $index) {
            DB::table('products')->insert([
                'title' => "Tủ bếp gỗ công nghiệp",
                'sub_category_id' => App\ProductSubCategory::all()->random()->id,
                'color_id' => \App\Color::all()->random()->id,
                'material_id' => \App\Material::all()->random()->id,
                'producer_id' => \App\Producer::all()->random()->id,
                'product_code' => $faker->postcode,
                'content' => "Tủ bếp gỗ công nghiệp cao cấp Ngày nay ngoài chất liệu gỗ tự nhiên xoan đào, gỗ sồi nga, gỗ thông... làm tủ bếp nói riêng và đồ nội thất nói chung, khách hàng có thêm được sự lựa chọn là gỗ công nghiệp cao cấp như lamilate,acylic, meca... Với kiểu dáng cách tân phù hợp với những không gian nhà hiện đại, gỗ công nghiệp cao cấp đang ngày càng chiếm được lòng tin của người tiêu dùng, đặc biệt với những đôi vợ chồng trẻ. Cùng với sự phát triển của khoa học kỹ thuật, chất lượng của gỗ công nghiệp đang ngày càng được nâng cao hơn để không thua kém so với gỗ tự nhiên. Hiện nay những mẫu tủ bếp đẹp đang được tủ bếp Hoàng Anh cung cấp trên thị trường và được khách hàng đón nhận. Và để đáp lại lòng tin đó, tủ bếp HOÀNG ANH đang cố gắng hơn nữa để thiết kế ra những mẫu tủ bếp đẹp, với những công năng sử dụng hợp lý để hỗ trợ tối đa cho người nội trợ.
Xin cảm ơn quý khách hàng đã quan tâm và coi sản phẩm của tủ bếp HOÀNG ANH như một phần tất yếu trong cuộc sống hàng ngày của gia đình bạn!",
                'picture' => "729b9812bf337e8ecefb2dc44c60550c4248dc86.jpg",
            ]);
        }

        foreach (range(1,5) as $index) {
            DB::table('products')->insert([
                'title' => "Tủ bếp gỗ công nghiệp",
                'sub_category_id' => App\ProductSubCategory::all()->random()->id,
                'color_id' => \App\Color::all()->random()->id,
                'material_id' => \App\Material::all()->random()->id,
                'producer_id' => \App\Producer::all()->random()->id,
                'product_code' => $faker->postcode,
                'content' => "Tủ bếp gỗ công nghiệp cao cấp Ngày nay ngoài chất liệu gỗ tự nhiên xoan đào, gỗ sồi nga, gỗ thông... làm tủ bếp nói riêng và đồ nội thất nói chung, khách hàng có thêm được sự lựa chọn là gỗ công nghiệp cao cấp như lamilate,acylic, meca... Với kiểu dáng cách tân phù hợp với những không gian nhà hiện đại, gỗ công nghiệp cao cấp đang ngày càng chiếm được lòng tin của người tiêu dùng, đặc biệt với những đôi vợ chồng trẻ. Cùng với sự phát triển của khoa học kỹ thuật, chất lượng của gỗ công nghiệp đang ngày càng được nâng cao hơn để không thua kém so với gỗ tự nhiên. Hiện nay những mẫu tủ bếp đẹp đang được tủ bếp Hoàng Anh cung cấp trên thị trường và được khách hàng đón nhận. Và để đáp lại lòng tin đó, tủ bếp HOÀNG ANH đang cố gắng hơn nữa để thiết kế ra những mẫu tủ bếp đẹp, với những công năng sử dụng hợp lý để hỗ trợ tối đa cho người nội trợ.
Xin cảm ơn quý khách hàng đã quan tâm và coi sản phẩm của tủ bếp HOÀNG ANH như một phần tất yếu trong cuộc sống hàng ngày của gia đình bạn!",
                'picture' => "a26353292646c5cd7d1cafb8b107f095c04c9b5c.jpg",
            ]);
        }

        foreach (range(1,5) as $index) {
            DB::table('products')->insert([
                'title' => "Tủ bếp gỗ công nghiệp",
                'sub_category_id' => App\ProductSubCategory::all()->random()->id,
                'color_id' => \App\Color::all()->random()->id,
                'material_id' => \App\Material::all()->random()->id,
                'producer_id' => \App\Producer::all()->random()->id,
                'product_code' => $faker->postcode,
                'content' => "Tủ bếp gỗ công nghiệp cao cấp Ngày nay ngoài chất liệu gỗ tự nhiên xoan đào, gỗ sồi nga, gỗ thông... làm tủ bếp nói riêng và đồ nội thất nói chung, khách hàng có thêm được sự lựa chọn là gỗ công nghiệp cao cấp như lamilate,acylic, meca... Với kiểu dáng cách tân phù hợp với những không gian nhà hiện đại, gỗ công nghiệp cao cấp đang ngày càng chiếm được lòng tin của người tiêu dùng, đặc biệt với những đôi vợ chồng trẻ. Cùng với sự phát triển của khoa học kỹ thuật, chất lượng của gỗ công nghiệp đang ngày càng được nâng cao hơn để không thua kém so với gỗ tự nhiên. Hiện nay những mẫu tủ bếp đẹp đang được tủ bếp Hoàng Anh cung cấp trên thị trường và được khách hàng đón nhận. Và để đáp lại lòng tin đó, tủ bếp HOÀNG ANH đang cố gắng hơn nữa để thiết kế ra những mẫu tủ bếp đẹp, với những công năng sử dụng hợp lý để hỗ trợ tối đa cho người nội trợ.
Xin cảm ơn quý khách hàng đã quan tâm và coi sản phẩm của tủ bếp HOÀNG ANH như một phần tất yếu trong cuộc sống hàng ngày của gia đình bạn!",
                'picture' => "ff1f0a3a6a456e01b90a6851a50448dc05e1f17e.jpg",
            ]);
        }

    }
}
