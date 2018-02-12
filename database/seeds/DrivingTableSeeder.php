<?php

use Illuminate\Database\Seeder;

class DrivingTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('driving')->delete();
        
        \DB::table('driving')->insert(array (
            0 => 
            array (
                'id' => 1,
                'website' => NULL,
                'vehicles_datlich' => 'camry',
                'id_tinhdatlich' => '06',
                'name_datlich' => 'An Nguyen',
                'idhuyen_datlich' => '061',
                'email_datlich' => 'it.thaian2009@gmail.com',
                'phone_datlich' => '01696427836',
                'months_datlich' => '4',
                'frmbaoduong' => 'vbaoduong',
                'ngaydatlich' => '7',
                'description' => 'Ngày :7/4',
                'created_at' => '2018-02-11 13:17:47',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}