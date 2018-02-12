<?php

use Illuminate\Database\Seeder;

class SlidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sliders')->delete();
        
        \DB::table('sliders')->insert(array (
            0 => 
            array (
                'id' => 1,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/211130320.jpg',
            ),
            1 => 
            array (
                'id' => 2,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/000313120.jpg',
            ),
            2 => 
            array (
                'id' => 3,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/prado10132123.jpg',
            ),
            3 => 
            array (
                'id' => 4,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/133000010.jpg',
            ),
            4 => 
            array (
                'id' => 5,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/200133210.png',
            ),
            5 => 
            array (
                'id' => 6,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/123230220.jpg',
            ),
            6 => 
            array (
                'id' => 7,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/033313220.jpg',
            ),
            7 => 
            array (
                'id' => 8,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/101122220.jpg',
            ),
            8 => 
            array (
                'id' => 9,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/332020230.jpg',
            ),
            9 => 
            array (
                'id' => 10,
                'url' => '/tin-tuc/hoi-thi-tay-nghe-noi-bo-tesc-2016-7.html',
                'thumb' => 'thumb/1200x635/2/upload/hinhanh/toyota-vios-201620113213.jpg',
            ),
        ));
        
        
    }
}