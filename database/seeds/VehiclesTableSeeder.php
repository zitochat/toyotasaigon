<?php

use Illuminate\Database\Seeder;

class VehiclesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('vehicles')->delete();
        
        \DB::table('vehicles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'slug' => 'hilux',
                'name' => 'HILUX',
            ),
            1 => 
            array (
                'id' => 2,
                'slug' => 'vios',
                'name' => 'VIOS',
            ),
            2 => 
            array (
                'id' => 3,
                'slug' => 'corolla-altis',
                'name' => 'COROLLA ALTIS',
            ),
            3 => 
            array (
                'id' => 4,
                'slug' => 'camry',
                'name' => 'CAMRY',
            ),
            4 => 
            array (
                'id' => 5,
                'slug' => 'innova',
                'name' => 'INNOVA',
            ),
            5 => 
            array (
                'id' => 6,
                'slug' => 'fortuner',
                'name' => 'FORTUNER',
            ),
            6 => 
            array (
                'id' => 7,
                'slug' => 'land-cruiser-prado',
                'name' => 'LAND CRUISER PRADO',
            ),
            7 => 
            array (
                'id' => 8,
                'slug' => 'land-cruiser',
                'name' => 'LAND CRUISER',
            ),
            8 => 
            array (
                'id' => 9,
                'slug' => 'hiace',
                'name' => 'HIACE',
            ),
            9 => 
            array (
                'id' => 10,
                'slug' => 'vios-trd',
                'name' => 'VIOS TRD',
            ),
            10 => 
            array (
                'id' => 11,
                'slug' => 'alphard',
                'name' => 'ALPHARD',
            ),
            11 => 
            array (
                'id' => 12,
                'slug' => 'innova-venturer',
                'name' => 'INNOVA VENTURER',
            ),
            12 => 
            array (
                'id' => 13,
                'slug' => 'yaris',
                'name' => 'YARIS',
            ),
            13 => 
            array (
                'id' => 14,
                'slug' => 'toyota86',
                'name' => 'TOYOTA86',
            ),
            14 => 
            array (
                'id' => 15,
                'slug' => 'other',
                'name' => 'Other',
            ),
        ));
        
        
    }
}