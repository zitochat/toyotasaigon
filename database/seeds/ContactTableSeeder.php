<?php

use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('contact')->delete();
        
        \DB::table('contact')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type' => '2',
                'name' => 'Nguyễn Thái An',
                'email' => 'it.thaian2009@gmail.com',
                'phone' => '01694488636',
                'provinceid' => '01',
                'address' => '265, to 10, ap Long Thanh, xa Ban Long, chau thanh tien giang, My tho, Tien Giang, Tien Giang',
                'content' => 'Hi xin chào',
                'created_at' => '2018-02-11 04:32:24',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}