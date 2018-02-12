<?php

use Illuminate\Database\Seeder;

class ProductSafeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_safe')->delete();
        
        
        
    }
}