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
                'name' => 'Alan Rezende',
                'email' => 'alanphp@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$vPi7hbHgIGHyQRLSB0TUc.RwEk7RAHS.z4I6bppPXWhFqMeginPmS',
                'remember_token' => NULL,
                'created_at' => '2019-09-10 22:47:44',
                'updated_at' => '2019-09-10 22:47:44',
            ),
        ));
        
        
    }
}