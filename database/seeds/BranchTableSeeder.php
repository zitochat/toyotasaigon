<?php

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('branch')->delete();
        
        \DB::table('branch')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'cong-ty-cp-toyota-dong-sai-gon',
                'name' => 'CÔNG TY CP TOYOTA ĐÔNG SÀI GÒN',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'chi-nhanh-go-vap',
                'name' => 'CHI NHÁNH GÒ VẤP',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'chi-nhanh-nguyen-van-luong',
                'name' => 'CHI NHÁNH NGUYỄN VĂN LƯỢNG',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'chi-nhanh-quan-9',
                'name' => 'CHI NHÁNH QUẬN 9',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'toyota-binh-thuan',
                'name' => 'TOYOTA BÌNH THUẬN',
            ),
        ));
        
        
    }
}