<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('schedule')->delete();
        
        \DB::table('schedule')->insert(array (
            0 => 
            array (
                'id' => 1,
                'website' => NULL,
                'vehicles_datlich' => 'CAMRY',
                'id_tinhdatlich' => '06',
                'name_datlich' => 'wer',
                'idhuyen_datlich' => '062',
                'email_datlich' => 'dsf',
                'phone_datlich' => '01696427836',
                'bienso_datlich' => 'sdf',
                'cn_datlich' => '0',
                'require_baoduong' => 'sdf',
                'xekhac' => 'dsf',
                'km_datlich' => 'dsf',
                'months_datlich' => '5',
                'frmbaoduong' => 'vbaoduong',
                'ngaydatlich' => '9',
                'description' => 'Ngày :9/5',
                'created_at' => '2018-02-11 12:23:14',
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'website' => NULL,
                'vehicles_datlich' => 'fortuner',
                'id_tinhdatlich' => '06',
                'name_datlich' => 'dsf',
                'idhuyen_datlich' => '061',
                'email_datlich' => 'it.thaian2009@gmail.com',
                'phone_datlich' => '01696427836',
                'bienso_datlich' => 'cxv',
                'cn_datlich' => 'chi-nhanh-nguyen-van-luong',
                'require_baoduong' => 'dsf',
                'xekhac' => 'sdf',
                'km_datlich' => 'sdf',
                'months_datlich' => '3',
                'frmbaoduong' => 'vbaoduong',
                'ngaydatlich' => '6',
                'description' => 'Ngày :6/3',
                'created_at' => '2018-02-11 12:48:22',
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'website' => NULL,
                'vehicles_datlich' => 'corolla-altis',
                'id_tinhdatlich' => '06',
                'name_datlich' => 'asdf',
                'idhuyen_datlich' => '061',
                'email_datlich' => 'it.thaian2009@gmail.com',
                'phone_datlich' => '01696427836',
                'bienso_datlich' => 'saf',
                'cn_datlich' => 'chi-nhanh-nguyen-van-luong',
                'require_baoduong' => 'sdf',
                'xekhac' => 'sdf',
                'km_datlich' => 'dsf',
                'months_datlich' => '4',
                'frmbaoduong' => 'vbaoduong',
                'ngaydatlich' => '5',
                'description' => 'Ngày :5/4',
                'created_at' => '2018-02-11 12:53:34',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}