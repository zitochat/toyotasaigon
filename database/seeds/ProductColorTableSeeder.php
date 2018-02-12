<?php

use Illuminate\Database\Seeder;

class ProductColorTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_color')->delete();
        
        \DB::table('product_color')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'MÀU BẠC',
                'color_image' => 'upload/product/2697473115_color_img.png',
            'color_code' => '(1D6)',
                'image' => 'upload/product/5043564559.png',
                'product' => 'alphard',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ĐỒNG ÁNH KIM',
                'color_image' => 'upload/product/9283046476_color_img.png',
            'color_code' => '(4V8)',
                'image' => 'upload/product/42307411850.png',
                'product' => 'alphard',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'MÀU XÁM ĐẬM',
                'color_image' => 'upload/product/5224034207_color_img.png',
            'color_code' => '(1G3)',
                'image' => 'upload/product/29081479480.png',
                'product' => 'alphard',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'MÀU TRẮNG',
                'color_image' => 'upload/product/2258268568_color_img.png',
                'color_code' => '040',
                'image' => 'upload/product/69731910370.png',
                'product' => 'alphard',
            ),
        ));
        
        
    }
}