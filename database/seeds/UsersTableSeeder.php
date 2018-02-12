<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Nguyễn Thái An',
                'username' => 'thaian2009',
                'email' => 'it.thaian2009@gmail.com',
                'password' => '$2y$10$wGs0pj9KWdIp7/8QkvAofu3Yv2rrrDYzujp8a6ky9bscAbMG1MKim
',
                'remember_token' => NULL,
                'created_at' => '2018-02-14 00:00:00',
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}