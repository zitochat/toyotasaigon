<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'alphard',
                'name' => 'ALPHARD',
                'thumb' => 'thumb/120x51/2/upload/product/alphard03202.png',
                'image' => 'upload/product/alphard03202.png',
                'price' => '3.533.000.000',
                'description' => 'Đẳng cấp thương gia - tiện nghi hạng nhất, Động cơ 3.5L - V6 mạnh mẽ sử dụng công nghệ Dual VVT-i cho công suất tối đa 275 mã lực ở vòng tua 6,200 vòng/phút và đạt được Mô men xoắn cực đại 340Nm ở vòng tua 4,700 vòng/phút',
                'parent' => 'alphard',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'corolla-altis-20v-sport',
                'name' => 'COROLLA ALTIS 2.0V SPORT',
                'thumb' => 'thumb/120x51/2/upload/product/corolla-altis-20v-sport30312.png',
                'image' => 'upload/product/corolla-altis-20v-sport30312.png',
                'price' => '905.000.000',
                'description' => 'An toàn tối ưu, vận hành êm ái. Khả năng vận hành mạnh mẽ cho cảm giác lái tuyệt vời để luôn là người bạn đường ăn ý và đầy bản lĩnh.',
                'parent' => 'corolla-altis',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'toyota-yaris-e',
                'name' => 'Toyota Yaris  E',
                'thumb' => 'thumb/120x51/2/upload/product/yaris03113.png',
                'image' => 'upload/product/yaris03113.png',
                'price' => '592.000.000',
                'description' => 'Toyota Yaris sở hữu diện mạo thể thao ấn tượng cùng không gian nội thất hiện đại rộng rãi, YARIS Thế hệ đột phá là biểu tượng cho sự tiện nghi và tính ứng dụng cao, dễ dàng di chuyển trên mọi con đường nhỏ.',
                'parent' => 'yaris',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'vios-trd-sportivo',
                'name' => 'VIOS TRD SPORTIVO',
                'thumb' => 'thumb/120x51/2/upload/product/vios-trd-sportivo11101.png',
                'image' => 'upload/product/vios-trd-sportivo11101.png',
                'price' => '586.000.000',
                'description' => 'Vios TRD mang đậm "Khí chất thể thao" là sự lựa chọn hoàn hảo để thể hiện cá tính, phong cách trẻ trung năng động và mạnh mẽ. ',
                'parent' => 'vios',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'toyota-camry-25q',
                'name' => 'TOYOTA CAMRY 2.5Q',
                'thumb' => 'thumb/120x51/2/upload/product/camry-25g02202.png',
                'image' => 'upload/product/camry-25g02202.png',
                'price' => '1.302.000.000',
                'description' => 'The CLASS. The CAMRY.
Đẳng cấp đến từ sự trang trọng, mạnh mẽ và hiện đại.',
                'parent' => 'camry',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'toyota-innova-venturer',
                'name' => 'Toyota Innova Venturer',
                'thumb' => 'thumb/120x51/2/upload/product/toyota-innova-venturer32102.png',
                'image' => 'upload/product/toyota-innova-venturer32102.png',
                'price' => '855.000.000',
                'description' => ' ',
                'parent' => 'innova-venturer',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'toyota-hilux-24e-4x2-mt',
                'name' => 'Toyota Hilux 2.4E 4x2 MT',
                'thumb' => 'thumb/120x51/2/upload/product/toyota-hilux-24e-4x2-mt22321.png',
                'image' => 'upload/product/toyota-hilux-24e-4x2-mt22321.png',
                'price' => '631.000.000',
                'description' => 'Toyota Hilux mở ra kỷ nguyên mới cho dòng xe bán tải hiện đại, phong cách, uy lực và đa năng. ',
                'parent' => 'hilux',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'toyota-innova-e',
                'name' => 'Toyota Innova E',
                'thumb' => 'thumb/120x51/2/upload/product/toyota-innova-e30021.png',
                'image' => 'upload/product/toyota-innova-e30021.png',
                'price' => '743.000.000',
                'description' => 'Toyota  Innova đáp ứng nhu cầu một chiếc xe của gia đình và không kém phần sang trọng.',
                'parent' => 'innova',
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'toyota-vios-g-cvt',
            'name' => 'Toyota Vios G (CVT)',
                'thumb' => 'thumb/120x51/2/upload/product/toyota-vios-g10101.png',
                'image' => 'upload/product/toyota-vios-g10101.png',
                'price' => '565.000.000',
                'description' => 'Toyota Vios cơ bản đem lại cho khách hàng thuận lợi cho việc đi lại trong đường phố chật hẹp một cách dễ dàng với tốc độ và sự nhanh nhẹn có nhau từ rất nhiều các chức năng khác đặc biệt.',
                'parent' => 'vios',
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'toyota-fortuner-24g-4x2',
                'name' => 'Toyota Fortuner 2.4G 4x2',
                'thumb' => 'thumb/120x51/2/upload/product/toyota-fortuner-24g-4x212102.png',
                'image' => 'upload/product/toyota-fortuner-24g-4x212102.png',
                'price' => '981.000.000',
                'description' => 'Toyota Fortuner thể hiện một vị thế riêng biệt với dáng vẻ oai phong và khả năng vận hành mạnh mẽ, bền bỉ ngay cả trên những địa hình hiểm trở và phức tạp nhất.',
                'parent' => 'fortuner',
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'toyota-land-cruiser-prado',
                'name' => 'Toyota Land Cruiser Prado',
                'thumb' => 'thumb/120x51/2/upload/product/toyota-land-cruiser-prado11112.png',
                'image' => 'upload/product/toyota-land-cruiser-prado11112.png',
                'price' => '2.262.000.000',
                'description' => 'Toyota Land Cruiser Prado - Hậu duệ xứng tầm
kế thừa dáng vẻ bề thế, to khỏe, vững chắc của chiếc xe việt dã danh tiếng toàn cầu.',
                'parent' => 'land-cruiser-prado',
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'toyota-land-cruiser',
                'name' => 'Toyota Land Cruiser',
                'thumb' => 'thumb/120x51/2/upload/product/land-cruiser02310.png',
                'image' => 'upload/product/land-cruiser02310.png',
                'price' => '3.650.000.000',
                'description' => 'Toyota Land Cruiser sở hữu thiết kế nổi bật, khả năng vận hành ưu việt kết hợp cùng nội thất cao cấp, Land Cruiser tiếp tục khẳng định vị thế dẫn đầu.',
                'parent' => 'land-cruiser',
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'toyota-hiace-xang',
            'name' => 'Toyota Hiace (Xăng)',
                'thumb' => 'thumb/120x51/2/upload/product/hiace21120.png',
                'image' => 'upload/product/hiace21120.png',
                'price' => '1.131.000.000',
                'description' => 'Toyota Hiace mang vẻ đẹp thanh lịch của dòng xe thương mại và thiết kế nội thất tiện nghi giúp hành khách luôn cảm nhận được sự thoải mái khi ngồi trên xe.',
                'parent' => 'hiace',
            ),
        ));
        
        
    }
}