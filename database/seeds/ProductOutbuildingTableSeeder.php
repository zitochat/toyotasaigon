<?php

use Illuminate\Database\Seeder;

class ProductOutbuildingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_outbuilding')->delete();
        
        \DB::table('product_outbuilding')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mâm xe',
                'image' => 'upload/product/23099217933.jpg',
                'thumb' => 'thumb/200x74/1/upload/product/23099217933.jpg',
            'description' => 'Mâm hợp kim nhôm 5 chấu cỡ lớn 17 inch được thiết kế 3 chiều ở mỗi chấu làm toát lên vẻ thể thao khỏe khoắn (V).',
                'type' => 'thumb',
                'product' => 'alphard',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Đầu xe',
                'image' => 'upload/product/4599498519.jpg',
                'thumb' => 'thumb/200x74/1/upload/product/4599498519.jpg',
                'description' => 'Lưới tản nhiệt hình lục giác kết hợp với cụm đèn trước, cùng cản trước được thiết kế mở rộng tạo ra những đườn nét vuốt dài sắc sảo cho cảm giác không gian ba chiều mạnh mẽ, vững chãi.',
                'type' => 'thumb',
                'product' => 'alphard',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Góc đuôi',
                'image' => 'upload/product/8551847781.jpg',
                'thumb' => 'thumb/200x74/1/upload/product/8551847781.jpg',
                'description' => 'Phần đuôi xe đường bệ với ăng-ten dạng vây cá mập lên sức cuốn hút đầy uy lực. Phần cửa sau thiết kế góc cạnh, sắc nét tạo nên tổng thể vững chải của xe.',
                'type' => 'thumb',
                'product' => 'alphard',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Gương chiếu hậu bên ngoài',
                'image' => 'upload/product/23099217930.jpg',
                'thumb' => 'thumb/200x74/1/upload/product/23099217930.jpg',
            'description' => 'Có chức năng chỉnh điện, gập điện, tích hợp đèn báo rẽ cùng đèn chào mừng độc đáo (G&V), đồng thời được mạ crom (V) hoặc sơn cùng màu thân xe (G&E) cho vẻ đẹp sang trọng, trang nhã',
                'type' => 'thumb',
                'product' => 'alphard',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Cùm đèn trước',
                'image' => 'upload/product/23099217931.jpg',
                'thumb' => 'thumb/200x74/1/upload/product/23099217931.jpg',
            'description' => 'Thiết kế mới sắc sảo nối liền nẹp mạ crom cùng đèn LED hiện đại chiếu gần dạng bóng chiếu, hệ thống tự động điều chỉnh góc chiếu và chế độ điều khiển đèn bật tắt tiện lợi (V)',
                'type' => 'thumb',
                'product' => 'alphard',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => '',
                'image' => 'upload/product/822485_Ngoai that1.jpg',
                'thumb' => '',
                'description' => NULL,
                'type' => 'slider',
                'product' => 'alphard',
            ),
        ));
        
        
    }
}