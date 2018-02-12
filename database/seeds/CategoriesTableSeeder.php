<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'dich-vu',
                'name' => 'Dịch Vụ',
                'parent_slug' => 'dich-vu',
                'parent_name' => 'Dịch Vụ',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'tin-tuc',
                'name' => 'Tin Tức',
                'parent_slug' => 'tin-tuc',
                'parent_name' => 'Tin Tức',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'hoat-dong-tesc',
                'name' => 'Hoạt Động TESC',
                'parent_slug' => 'tin-tuc',
                'parent_name' => 'Tin Tức',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'thi-truong-oto',
                'name' => 'Thị Trường Ôtô',
                'parent_slug' => 'tin-tuc',
                'parent_name' => 'Tin Tức',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'gioi-thieu-chung',
                'name' => 'Giới Thiệu Chung',
                'parent_slug' => 'gioi-thieu',
                'parent_name' => 'Giới Thiệu',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'bo-phan-ban-hang',
                'name' => 'Bộ Phận Bán Hàng',
                'parent_slug' => 'gioi-thieu',
                'parent_name' => 'Giới Thiệu',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'bo-phan-dich-vu',
                'name' => 'Bộ Phận Dịch Vụ',
                'parent_slug' => 'gioi-thieu',
                'parent_name' => 'Giới Thiệu',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'gioi-thieu',
                'name' => 'Giới Thiệu',
                'parent_slug' => 'gioi-thieu',
                'parent_name' => 'Giới Thiệu',
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'tra-gop',
                'name' => 'Trả Góp',
                'parent_slug' => 'tra-gop',
                'parent_name' => 'Trả Góp',
            ),
            9 => 
            array (
                'id' => 11,
                'slug' => 'video',
                'name' => 'Video',
                'parent_slug' => 'video',
                'parent_name' => 'Video',
            ),
        ));
        
        
    }
}